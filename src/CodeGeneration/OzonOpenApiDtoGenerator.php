<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\CodeGeneration;

use PhpSoftBox\CodeGenerator\CodeGenerator;
use PhpSoftBox\CodeGenerator\FileWriter;
use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;
use RuntimeException;

use function addslashes;
use function array_filter;
use function array_key_exists;
use function array_keys;
use function array_map;
use function array_merge;
use function array_shift;
use function array_unique;
use function array_values;
use function basename;
use function count;
use function dirname;
use function explode;
use function file_get_contents;
use function glob;
use function implode;
use function in_array;
use function is_array;
use function is_dir;
use function is_file;
use function is_string;
use function json_decode;
use function ksort;
use function max;
use function mkdir;
use function preg_match;
use function preg_quote;
use function preg_replace;
use function preg_replace_callback;
use function preg_split;
use function rtrim;
use function sort;
use function sprintf;
use function str_contains;
use function str_repeat;
use function str_replace;
use function str_starts_with;
use function strlen;
use function strtolower;
use function strtoupper;
use function substr;
use function trim;
use function ucfirst;
use function unlink;

use const JSON_THROW_ON_ERROR;
use const SORT_FLAG_CASE;
use const SORT_STRING;

final class OzonOpenApiDtoGenerator
{
    public function __construct(
        private readonly CodeGenerator $codeGenerator = new CodeGenerator(),
    ) {
    }

    public function generate(OzonOpenApiDtoGeneratorOptions $options): OzonOpenApiDtoGeneratorResult
    {
        /** @var array<string, mixed> $openApi */
        $openApi = json_decode((string) file_get_contents($options->specPath), true, 512, JSON_THROW_ON_ERROR);
        $schemas = $openApi['components']['schemas'] ?? [];
        if (!is_array($schemas)) {
            throw new RuntimeException('OpenAPI schemas are not found.');
        }

        $versions        = $this->resolveVersions($openApi, $options->version);
        $isBatch         = count($versions) > 1;
        $classNames      = $this->buildClassNameMap($schemas);
        $allOperations   = [];
        $generatedCount  = 0;
        $updatedWrappers = 0;

        foreach ($versions as $version) {
            $versionNamespace = $this->versionNamespace($version);
            $versionDtoDir    = $this->joinPath($options->dtoDirectory, $versionNamespace);

            if ($options->cleanDtoDirectory) {
                $this->clearGeneratedDirectory($versionDtoDir);
            }

            $this->ensureDirectory($versionDtoDir);

            $operations       = $this->collectOperations($openApi, $schemas, $classNames, $version);
            $schemaNamespaces = $this->buildSchemaNamespaceMap($operations, $schemas, $version);
            $operations       = $this->withOperationClasses($operations, $classNames, $schemaNamespaces, $version);
            $generated        = [];

            foreach ($operations as $operation) {
                if ($this->manualDtoClassForOperation($operation) !== null) {
                    continue;
                }

                $this->addSchemaClass(
                    schemaName: $operation->schemaName,
                    schemas: $schemas,
                    classNames: $classNames,
                    schemaNamespaces: $schemaNamespaces,
                    generated: $generated,
                    targetDir: $versionDtoDir,
                    versionNamespace: $versionNamespace,
                );
            }

            $generatedCount += count($generated);
            $allOperations = array_merge($allOperations, $operations);

            if ($options->updateWrappers) {
                $updatedWrappers += $this->updateWrappers(
                    wrapperDirectory: $this->wrapperDirectoryForVersion($options->wrapperDirectory, $version, $isBatch),
                    operations: $operations,
                    version: $version,
                );
            }
        }

        $this->ensureDirectory(dirname($options->responseMapPath));
        FileWriter::writeFile($options->responseMapPath, $this->renderResponseMap($allOperations));

        return new OzonOpenApiDtoGeneratorResult(
            generatedClasses: $generatedCount,
            responseMappings: count($allOperations),
            updatedWrappers: $updatedWrappers,
        );
    }

    /**
     * @param array<string, mixed> $openApi
     *
     * @return non-empty-list<string>
     */
    private function resolveVersions(array $openApi, string $version): array
    {
        $version = trim($version);
        if ($version === '' || in_array($version, ['all', '*'], true)) {
            $versions = [];
            foreach (array_keys($openApi['paths'] ?? []) as $path) {
                if (is_string($path) && preg_match('#^/(v[0-9]+)/#', $path, $match) === 1) {
                    $versions[] = $match[1];
                }
            }

            $versions = array_values(array_unique($versions));
            sort($versions);

            return $versions === [] ? ['v1'] : $versions;
        }

        $versions = [];
        foreach (explode(',', $version) as $item) {
            $item = trim($item);
            if ($item !== '') {
                $versions[] = $item;
            }
        }

        $versions = array_values(array_unique($versions));

        return $versions === [] ? ['v1'] : $versions;
    }

    /**
     * @param array<string, mixed> $openApi
     * @param array<string, mixed> $schemas
     * @param array<string, string> $classNames
     *
     * @return list<OzonOpenApiOperation>
     */
    private function collectOperations(array $openApi, array &$schemas, array $classNames, string $version): array
    {
        $paths = $openApi['paths'] ?? [];
        if (!is_array($paths)) {
            return [];
        }

        $prefix     = '/' . trim($version, '/') . '/';
        $operations = [];
        foreach ($paths as $path => $methods) {
            if (!is_string($path) || !str_starts_with($path, $prefix) || !is_array($methods)) {
                continue;
            }

            foreach ($methods as $method => $operation) {
                if (!is_string($method) || !is_array($operation)) {
                    continue;
                }

                $httpMethod = strtoupper($method);
                $schema     = $operation['responses']['200']['content']['application/json']['schema'] ?? null;
                $schemaName = $this->responseSchemaName($path, $httpMethod, $operation, $schema, $schemas);

                $operations[] = new OzonOpenApiOperation(
                    key: $httpMethod . ' ' . $path,
                    method: $httpMethod,
                    path: $path,
                    class: '',
                    schemaName: $schemaName,
                );
            }
        }

        return $operations;
    }

    /**
     * @param list<OzonOpenApiOperation> $operations
     * @param array<string, mixed> $schemas
     *
     * @return array<string, string>
     */
    private function buildSchemaNamespaceMap(array $operations, array $schemas, string $version): array
    {
        $map = [];
        foreach ($operations as $operation) {
            $this->assignSchemaNamespace(
                schemaName: $operation->schemaName,
                namespace: $this->dtoNamespaceSegmentFromPath($operation->path, $version),
                schemas: $schemas,
                map: $map,
            );
        }

        return $map;
    }

    /**
     * @param array<string, mixed> $schemas
     * @param array<string, string> $map
     */
    private function assignSchemaNamespace(string $schemaName, string $namespace, array $schemas, array &$map): void
    {
        if (isset($map[$schemaName])) {
            return;
        }

        $map[$schemaName] = $namespace;
        $schema           = $schemas[$schemaName] ?? ['type' => 'object'];
        if (!is_array($schema)) {
            return;
        }

        foreach ($this->collectRefs($schema) as $ref) {
            $this->assignSchemaNamespace($ref, $namespace, $schemas, $map);
        }
    }

    /**
     * @param list<OzonOpenApiOperation> $operations
     * @param array<string, string> $classNames
     * @param array<string, string> $schemaNamespaces
     *
     * @return list<OzonOpenApiOperation>
     */
    private function withOperationClasses(
        array $operations,
        array $classNames,
        array $schemaNamespaces,
        string $version,
    ): array {
        $versionNamespace = $this->versionNamespace($version);

        return array_map(
            fn (OzonOpenApiOperation $operation): OzonOpenApiOperation => new OzonOpenApiOperation(
                key: $operation->key,
                method: $operation->method,
                path: $operation->path,
                class: $this->manualDtoClassForOperation($operation)
                    ?? $this->schemaFqcn($operation->schemaName, $classNames, $schemaNamespaces, $versionNamespace),
                schemaName: $operation->schemaName,
            ),
            $operations,
        );
    }

    /**
     * @return class-string<OzonDtoInterface>|null
     */
    private function manualDtoClassForOperation(OzonOpenApiOperation $operation): ?string
    {
        return match ($operation->key) {
            'POST /v5/fbs/posting/product/exemplar/status'   => 'PhpSoftBox\\Ozon\\Dto\\V5\\Posting\\FbsPostingProductExemplarStatusV5Response',
            'POST /v5/fbs/posting/product/exemplar/validate' => 'PhpSoftBox\\Ozon\\Dto\\V5\\Posting\\FbsPostingProductExemplarValidateV5Response',
            'POST /v5/product/info/prices'                   => 'PhpSoftBox\\Ozon\\Dto\\V5\\Product\\GetProductInfoPricesV5Response',
            default                                          => null,
        };
    }

    /**
     * @param array<string, mixed> $operation
     * @param array<string, mixed>|null $schema
     * @param array<string, mixed> $schemas
     */
    private function responseSchemaName(
        string $path,
        string $method,
        array $operation,
        mixed $schema,
        array &$schemas,
    ): string {
        if (is_array($schema) && isset($schema['$ref']) && is_string($schema['$ref'])) {
            return $this->refName($schema['$ref']);
        }

        $operationId = $operation['operationId'] ?? null;
        $baseName    = is_string($operationId) && $operationId !== ''
            ? $operationId
            : $method . '_' . trim($path, '/');

        $schemaName = $this->classNameFromSchemaName($baseName . '_Response');
        if (!array_key_exists($schemaName, $schemas)) {
            $schemas[$schemaName] = is_array($schema) ? $schema : ['type' => 'object'];
        }

        return $schemaName;
    }

    /**
     * @param array<string, mixed> $schemas
     *
     * @return array<string, string>
     */
    private function buildClassNameMap(array $schemas): array
    {
        $used = [];
        $map  = [];

        foreach (array_keys($schemas) as $schemaName) {
            $base = $this->classNameFromSchemaName((string) $schemaName);
            $name = $base;
            $i    = 2;
            while (isset($used[$name])) {
                $name = $base . $i;
                ++$i;
            }

            $used[$name]               = true;
            $map[(string) $schemaName] = $name;
        }

        return $map;
    }

    private function classNameFromSchemaName(string $schemaName): string
    {
        $parts = preg_split('/[^A-Za-z0-9]+/', $schemaName) ?: [];
        $name  = '';
        foreach ($parts as $part) {
            if ($part === '') {
                continue;
            }

            $name .= ucfirst($part);
        }

        if ($name === '') {
            $name = 'Response';
        }

        if (preg_match('/^[0-9]/', $name) === 1) {
            $name = 'Dto' . $name;
        }

        return $name;
    }

    /**
     * @param array<string, mixed> $schemas
     * @param array<string, string> $classNames
     * @param array<string, string> $schemaNamespaces
     * @param array<string, bool> $generated
     */
    private function addSchemaClass(
        string $schemaName,
        array $schemas,
        array $classNames,
        array $schemaNamespaces,
        array &$generated,
        string $targetDir,
        string $versionNamespace,
    ): void {
        if (isset($generated[$schemaName])) {
            return;
        }

        $generated[$schemaName] = true;

        $schema = $schemas[$schemaName] ?? ['type' => 'object'];
        if (!is_array($schema)) {
            $schema = ['type' => 'object'];
        }

        foreach ($this->collectRefs($schema) as $ref) {
            $this->addSchemaClass($ref, $schemas, $classNames, $schemaNamespaces, $generated, $targetDir, $versionNamespace);
        }

        $className       = $classNames[$schemaName] ?? $this->classNameFromSchemaName($schemaName);
        $schemaInfo      = $this->schemaClassInfo($schemaName, $classNames, $schemaNamespaces, $versionNamespace);
        $schemaSubdir    = str_replace('\\', '/', $schemaInfo['namespaceSegment']);
        $schemaTargetDir = $this->joinPath($targetDir, $schemaSubdir);
        $this->ensureDirectory($schemaTargetDir);

        FileWriter::writeFile(
            $this->joinPath($schemaTargetDir, $className . '.php'),
            $this->renderDtoClass(
                className: $className,
                schema: $this->normalizeObjectSchema($schema),
                classNames: $classNames,
                schemaNamespaces: $schemaNamespaces,
                versionNamespace: $versionNamespace,
                namespace: $schemaInfo['namespace'],
            ),
        );
    }

    /**
     * @param array<string, mixed> $schema
     *
     * @return array<string, mixed>
     */
    private function normalizeObjectSchema(array $schema): array
    {
        if (($schema['type'] ?? null) === 'object' || isset($schema['properties'])) {
            return $schema;
        }

        return [
            'type'       => 'object',
            'properties' => [
                'value' => $schema,
            ],
        ];
    }

    /**
     * @param array<string, mixed> $schema
     * @param array<string, string> $classNames
     * @param array<string, string> $schemaNamespaces
     */
    private function renderDtoClass(
        string $className,
        array $schema,
        array $classNames,
        array $schemaNamespaces,
        string $versionNamespace,
        string $namespace,
    ): string {
        $properties = $schema['properties'] ?? [];
        if (!is_array($properties)) {
            $properties = [];
        }

        $fields = [];
        foreach ($properties as $jsonName => $propertySchema) {
            if (!is_string($jsonName) || !is_array($propertySchema)) {
                continue;
            }

            $fields[] = $this->fieldDefinition($jsonName, $propertySchema, $classNames, $schemaNamespaces, $versionNamespace, $namespace);
        }

        $knownKeys = array_map(static fn (array $field): string => $field['jsonName'], $fields);
        $uses      = [
            OzonDtoInterface::class,
            OzonDtoValue::class,
        ];
        foreach ($fields as $field) {
            $uses = array_merge($uses, $field['uses']);
        }
        $uses = array_values(array_unique($uses));

        $bodyLines   = [];
        $bodyLines[] = '/**';
        foreach ($fields as $field) {
            if ($field['docType'] !== null) {
                $bodyLines[] = ' * @param ' . $field['docType'] . ' $' . $field['property'];
            }
        }
        $bodyLines[] = ' * @param array<string, mixed> $extra';
        $bodyLines[] = ' */';
        $bodyLines[] = 'public function __construct(';
        foreach ($fields as $field) {
            $bodyLines[] = '    public ' . $field['phpType'] . ' $' . $field['property'] . ',';
        }
        $bodyLines[] = '    public array $extra = [],';
        $bodyLines[] = ') {';
        $bodyLines[] = '}';
        $bodyLines[] = '';
        $bodyLines[] = 'public static function fromArray(array $payload): static';
        $bodyLines[] = '{';
        $bodyLines[] = '    return new self(';
        foreach ($fields as $field) {
            $bodyLines[] = '        ' . $field['property'] . ': ' . $field['hydrate'] . ',';
        }
        $bodyLines[] = '        extra: OzonDtoValue::extra($payload, ' . $this->renderStringList($knownKeys) . '),';
        $bodyLines[] = '    );';
        $bodyLines[] = '}';

        $code = $this->codeGenerator->renderClass(
            className: $className,
            namespace: $namespace,
            uses: $uses,
            bodyLines: $bodyLines,
            readonly: true,
        );

        $code = str_replace(
            'final readonly class ' . $className . "\n",
            'final readonly class ' . $className . " implements OzonDtoInterface\n",
            $code,
        );

        return str_replace(
            "declare(strict_types=1);\n",
            "declare(strict_types=1);\n\n/**\n * @generated Ozon OpenAPI DTO\n */\n",
            $code,
        );
    }

    /**
     * @param array<string, string> $classNames
     * @param array<string, string> $schemaNamespaces
     *
     * @return array{jsonName: string, property: string, phpType: string, docType: string|null, hydrate: string, uses: list<string>}
     */
    private function fieldDefinition(
        string $jsonName,
        array $schema,
        array $classNames,
        array $schemaNamespaces,
        string $versionNamespace,
        string $currentNamespace,
    ): array {
        $property = $this->propertyName($jsonName);
        $type     = $this->resolvePropertyType($schema, $classNames, $schemaNamespaces, $versionNamespace, $currentNamespace);
        $access   = '$payload[\'' . addslashes($jsonName) . '\'] ?? null';

        return [
            'jsonName' => $jsonName,
            'property' => $property,
            'phpType'  => $type['phpType'],
            'docType'  => $type['docType'],
            'hydrate'  => sprintf($type['hydrate'], $access),
            'uses'     => $type['uses'],
        ];
    }

    /**
     * @param array<string, mixed> $schema
     * @param array<string, string> $classNames
     * @param array<string, string> $schemaNamespaces
     *
     * @return array{phpType: string, docType: string|null, hydrate: string, uses: list<string>}
     */
    private function resolvePropertyType(
        array $schema,
        array $classNames,
        array $schemaNamespaces,
        string $versionNamespace,
        string $currentNamespace,
    ): array {
        $schema = $this->unwrapSchema($schema);

        if (isset($schema['$ref']) && is_string($schema['$ref'])) {
            $reference = $this->schemaClassReference($this->refName($schema['$ref']), $classNames, $schemaNamespaces, $versionNamespace, $currentNamespace);

            return [
                'phpType' => '?' . $reference['className'],
                'docType' => null,
                'hydrate' => 'OzonDtoValue::object(%s, ' . $reference['className'] . '::class)',
                'uses'    => $reference['uses'],
            ];
        }

        $type = $schema['type'] ?? null;
        if ($type === 'array') {
            $items = $schema['items'] ?? [];
            $items = is_array($items) ? $this->unwrapSchema($items) : [];
            if (isset($items['$ref']) && is_string($items['$ref'])) {
                $reference = $this->schemaClassReference($this->refName($items['$ref']), $classNames, $schemaNamespaces, $versionNamespace, $currentNamespace);

                return [
                    'phpType' => 'array',
                    'docType' => 'list<' . $reference['className'] . '>',
                    'hydrate' => 'OzonDtoValue::objectList(%s, ' . $reference['className'] . '::class)',
                    'uses'    => $reference['uses'],
                ];
            }

            return [
                'phpType' => 'array',
                'docType' => $this->primitiveListDocType($items),
                'hydrate' => 'OzonDtoValue::array(%s)',
                'uses'    => [],
            ];
        }

        return match ($type) {
            'integer' => ['phpType' => '?int', 'docType' => null, 'hydrate' => 'OzonDtoValue::int(%s)', 'uses' => []],
            'number'  => ['phpType' => '?float', 'docType' => null, 'hydrate' => 'OzonDtoValue::float(%s)', 'uses' => []],
            'boolean' => ['phpType' => '?bool', 'docType' => null, 'hydrate' => 'OzonDtoValue::bool(%s)', 'uses' => []],
            'string'  => ['phpType' => '?string', 'docType' => null, 'hydrate' => 'OzonDtoValue::string(%s)', 'uses' => []],
            default   => ['phpType' => 'array', 'docType' => 'array<array-key, mixed>', 'hydrate' => 'OzonDtoValue::array(%s)', 'uses' => []],
        };
    }

    /**
     * @param array<string, mixed> $schema
     *
     * @return array<string, mixed>
     */
    private function unwrapSchema(array $schema): array
    {
        foreach (['allOf', 'oneOf', 'anyOf'] as $key) {
            if (!isset($schema[$key]) || !is_array($schema[$key]) || count($schema[$key]) !== 1 || !is_array($schema[$key][0])) {
                continue;
            }

            return $this->unwrapSchema($schema[$key][0]);
        }

        return $schema;
    }

    /**
     * @param array<string, mixed> $schema
     */
    private function primitiveListDocType(array $schema): string
    {
        return match ($schema['type'] ?? null) {
            'integer' => 'list<int>',
            'number'  => 'list<float>',
            'boolean' => 'list<bool>',
            'string'  => 'list<string>',
            default   => 'array<array-key, mixed>',
        };
    }

    /**
     * @param array<string, string> $classNames
     * @param array<string, string> $schemaNamespaces
     *
     * @return array{namespaceSegment: string, namespace: string, className: string, fqcn: class-string<OzonDtoInterface>}
     */
    private function schemaClassInfo(
        string $schemaName,
        array $classNames,
        array $schemaNamespaces,
        string $versionNamespace,
    ): array {
        $namespaceSegment = $schemaNamespaces[$schemaName] ?? 'Common';
        $className        = $classNames[$schemaName] ?? $this->classNameFromSchemaName($schemaName);
        $namespace        = 'PhpSoftBox\\Ozon\\Dto\\' . $versionNamespace . '\\' . $namespaceSegment;

        return [
            'namespaceSegment' => $namespaceSegment,
            'namespace'        => $namespace,
            'className'        => $className,
            'fqcn'             => $namespace . '\\' . $className,
        ];
    }

    /**
     * @param array<string, string> $classNames
     * @param array<string, string> $schemaNamespaces
     *
     * @return class-string<OzonDtoInterface>
     */
    private function schemaFqcn(
        string $schemaName,
        array $classNames,
        array $schemaNamespaces,
        string $versionNamespace,
    ): string {
        return $this->schemaClassInfo($schemaName, $classNames, $schemaNamespaces, $versionNamespace)['fqcn'];
    }

    /**
     * @param array<string, string> $classNames
     * @param array<string, string> $schemaNamespaces
     *
     * @return array{className: string, uses: list<string>}
     */
    private function schemaClassReference(
        string $schemaName,
        array $classNames,
        array $schemaNamespaces,
        string $versionNamespace,
        string $currentNamespace,
    ): array {
        $info = $this->schemaClassInfo($schemaName, $classNames, $schemaNamespaces, $versionNamespace);
        if ($info['namespace'] === $currentNamespace) {
            return [
                'className' => $info['className'],
                'uses'      => [],
            ];
        }

        return [
            'className' => $info['className'],
            'uses'      => [$info['fqcn']],
        ];
    }

    private function propertyName(string $jsonName): string
    {
        $parts = preg_split('/[^A-Za-z0-9]+/', $jsonName) ?: [];
        $name  = '';
        foreach ($parts as $index => $part) {
            if ($part === '') {
                continue;
            }

            $name .= $index === 0 ? strtolower($part) : ucfirst($part);
        }

        if ($name === '') {
            $name = 'value';
        }

        if (preg_match('/^[0-9]/', $name) === 1) {
            $name = 'field' . ucfirst($name);
        }

        return $name;
    }

    /**
     * @param array<string, mixed> $schema
     *
     * @return list<string>
     */
    private function collectRefs(array $schema): array
    {
        $refs = [];
        if (isset($schema['$ref']) && is_string($schema['$ref'])) {
            $refs[] = $this->refName($schema['$ref']);
        }

        foreach ($schema as $value) {
            if (is_array($value)) {
                $refs = array_merge($refs, $this->collectRefs($value));
            }
        }

        return array_values(array_unique($refs));
    }

    private function refName(string $ref): string
    {
        return basename(str_replace('#/components/schemas/', '', $ref));
    }

    /**
     * @param list<string> $items
     */
    private function renderStringList(array $items): string
    {
        if ($items === []) {
            return '[]';
        }

        return '[' . implode(', ', array_map(static fn (string $item): string => '\'' . addslashes($item) . '\'', $items)) . ']';
    }

    /**
     * @param list<OzonOpenApiOperation> $operations
     */
    private function renderResponseMap(array $operations): string
    {
        $map = [];
        foreach ($operations as $operation) {
            $map[$operation->key] = $operation->class;
        }
        ksort($map);

        $classes         = array_values(array_unique(array_values($map)));
        $shortNameCounts = [];
        foreach ($classes as $class) {
            $shortNameCounts[$this->shortClassName($class)] = ($shortNameCounts[$this->shortClassName($class)] ?? 0) + 1;
        }

        $imports = [];
        foreach ($classes as $class) {
            if ($shortNameCounts[$this->shortClassName($class)] === 1) {
                $imports[] = $class;
            }
        }
        sort($imports, SORT_STRING | SORT_FLAG_CASE);

        $maxKeyLength = 0;
        foreach (array_keys($map) as $key) {
            $maxKeyLength = max($maxKeyLength, strlen('\'' . addslashes($key) . '\''));
        }

        $lines = [
            '<?php',
            '',
            'declare(strict_types=1);',
            '',
            'namespace PhpSoftBox\\Ozon\\Dto;',
            '',
        ];

        foreach ($imports as $class) {
            $lines[] = 'use ' . $class . ';';
        }

        if ($imports !== []) {
            $lines[] = '';
        }

        $lines[] = 'use function preg_replace;';
        $lines[] = 'use function strtoupper;';
        $lines[] = 'use function trim;';
        $lines[] = '';
        $lines[] = 'final class OzonResponseDtoMap';
        $lines[] = '{';
        $lines[] = '    /**';
        $lines[] = '     * @var array<string, class-string<OzonDtoInterface>>';
        $lines[] = '     */';
        $lines[] = '    private const MAP = [';

        foreach ($map as $key => $class) {
            $keyLiteral = '\'' . addslashes($key) . '\'';
            $lines[]    = '        '
                . $keyLiteral
                . str_repeat(' ', $maxKeyLength - strlen($keyLiteral) + 1)
                . '=> '
                . $this->responseMapClassReference($class, $shortNameCounts)
                . '::class,';
        }

        $lines[] = '    ];';
        $lines[] = '';
        $lines[] = '    /**';
        $lines[] = '     * @return class-string<OzonDtoInterface>|null';
        $lines[] = '     */';
        $lines[] = '    public static function resolve(string $method, string $path): ?string';
        $lines[] = '    {';
        $lines[] = '        $key = strtoupper($method) . \' \' . normalizeOzonPath($path);';
        $lines[] = '';
        $lines[] = '        return self::MAP[$key] ?? self::MAP[normalizeOzonFilePathKey($key)] ?? null;';
        $lines[] = '    }';
        $lines[] = '}';
        $lines[] = '';
        $lines[] = 'function normalizeOzonPath(string $path): string';
        $lines[] = '{';
        $lines[] = '    return \'/\' . trim($path, \'/\');';
        $lines[] = '}';
        $lines[] = '';
        $lines[] = 'function normalizeOzonFilePathKey(string $key): string';
        $lines[] = '{';
        $lines[] = '    return preg_replace(\'#/[^/]+$#\', \'/{file_guid}\', $key) ?? $key;';
        $lines[] = '}';

        return implode("\n", $lines) . "\n";
    }

    /**
     * @param array<string, int> $shortNameCounts
     * @param class-string<OzonDtoInterface> $class
     */
    private function responseMapClassReference(string $class, array $shortNameCounts): string
    {
        $shortName = $this->shortClassName($class);
        if ($shortNameCounts[$shortName] === 1) {
            return $shortName;
        }

        return str_replace('PhpSoftBox\\Ozon\\Dto\\', '', $class);
    }

    /**
     * @param list<OzonOpenApiOperation> $operations
     */
    private function updateWrappers(string $wrapperDirectory, array $operations, string $version): int
    {
        $pathMap = [];
        foreach ($operations as $operation) {
            $pathMap[$operation->key] = $operation->class;
        }

        $updated = 0;
        foreach (glob($this->joinPath($wrapperDirectory, '*.php')) ?: [] as $file) {
            $code = (string) file_get_contents($file);
            $next = $this->updateWrapperReturns($code, $pathMap, $version);
            $next = $this->updateWrapperReturnTypes($next, $pathMap, $version);
            $next = $this->ensureOzonDtoInterfaceImport($next);

            if ($next === $code) {
                continue;
            }

            FileWriter::writeFile($file, $next);
            ++$updated;
        }

        return $updated;
    }

    /**
     * @param array<string, class-string<OzonDtoInterface>> $pathMap
     */
    private function updateWrapperReturns(string $code, array $pathMap, string $version): string
    {
        $clientMethod = $this->clientVersionMethod($version);

        return preg_replace_callback(
            '~return\s+(?P<call>\$this->client->'
                . preg_quote($clientMethod, '~')
                . '\(\'(?P<section>[^\']*)\'\)->(?P<method>get|post|put|patch|delete)\(\'(?P<path>[^\']*)\'(?:.|\n)*?\))(?P<dto>\s*->makeDto\((?P<dtoArgs>(?:.|\n)*?)\))?\s*;~',
            function (array $matches) use ($pathMap, $version): string {
                $key = $this->operationKey($version, $matches['section'], $matches['method'], $matches['path']);
                if (!isset($pathMap[$key])) {
                    return $matches[0];
                }

                if (trim((string) ($matches['dtoArgs'] ?? '')) !== '') {
                    return $matches[0];
                }

                return 'return ' . $matches['call'] . '->makeDto();';
            },
            $code,
        ) ?? $code;
    }

    /**
     * @param array<string, class-string<OzonDtoInterface>> $pathMap
     */
    private function updateWrapperReturnTypes(string $code, array $pathMap, string $version): string
    {
        $imports = [];
        $next    = preg_replace_callback(
            '~(?P<doc>/\\*\\*.*?\\*/\\s+)?(?P<signature>public function \\w+\\([^{}]*\\)\\s*:\\s*)(?:Collection|OzonDtoInterface)(?P<body>\\s*\\{.*?^    \\})~ms',
            function (array $matches) use (&$imports, $pathMap, $version): string {
                $dtoClass = $this->resolveOperationClassFromBody($matches['body'], $pathMap, $version);
                if ($dtoClass === null) {
                    return $matches[0];
                }

                $imports[] = $dtoClass;

                return $this->replaceReturnDoc((string) ($matches['doc'] ?? ''), $this->shortClassName($dtoClass))
                    . $matches['signature']
                    . 'OzonDtoInterface'
                    . $matches['body'];
            },
            $code,
        ) ?? $code;

        foreach (array_unique($imports) as $class) {
            $next = $this->ensureClassImport($next, $class);
        }

        return $next;
    }

    /**
     * @param array<string, class-string<OzonDtoInterface>> $pathMap
     *
     * @return class-string<OzonDtoInterface>|null
     */
    private function resolveOperationClassFromBody(string $body, array $pathMap, string $version): ?string
    {
        $clientMethod = $this->clientVersionMethod($version);

        if (preg_match(
            '~\\$this->client->'
                . preg_quote($clientMethod, '~')
                . '\\(\'(?P<section>[^\']*)\'\\)->(?P<method>get|post|put|patch|delete)\\(\'(?P<path>[^\']*)\'~',
            $body,
            $match,
        ) !== 1) {
            return null;
        }

        $key = $this->operationKey($version, $match['section'], $match['method'], $match['path']);

        return $pathMap[$key] ?? null;
    }

    /**
     */
    private function replaceReturnDoc(string $doc, string $returnType): string
    {
        if ($doc === '') {
            return $doc;
        }

        if (str_contains($doc, '@return')) {
            return preg_replace('~@return\\s+[^\\r\\n]+~', '@return ' . $returnType, $doc, 1) ?? $doc;
        }

        return str_replace(" */\n", " *\n * @return " . $returnType . "\n */\n", $doc);
    }

    private function ensureOzonDtoInterfaceImport(string $code): string
    {
        if (!str_contains($code, 'OzonDtoInterface') || str_contains($code, 'use PhpSoftBox\\Ozon\\Dto\\OzonDtoInterface;')) {
            return $code;
        }

        return str_replace(
            "use PhpSoftBox\\Ozon\\OzonApiClient;\n",
            "use PhpSoftBox\\Ozon\\Dto\\OzonDtoInterface;\nuse PhpSoftBox\\Ozon\\OzonApiClient;\n",
            $code,
        );
    }

    /**
     * @param class-string $class
     */
    private function ensureClassImport(string $code, string $class): string
    {
        $use        = 'use ' . $class . ';';
        $shortClass = preg_quote($this->shortClassName($class), '~');
        $code       = preg_replace_callback(
            '~^use PhpSoftBox\\\\Ozon\\\\Dto\\\\V[0-9]+(?:\\\\[A-Za-z0-9_]+)*\\\\' . $shortClass . ';\\R~m',
            static fn (array $matches): string => trim($matches[0]) === $use ? $matches[0] : '',
            $code,
        ) ?? $code;

        if (str_contains($code, $use)) {
            return $code;
        }

        return str_replace(
            "use PhpSoftBox\\Ozon\\OzonApiClient;\n",
            $use . "\nuse PhpSoftBox\\Ozon\\OzonApiClient;\n",
            $code,
        );
    }

    /**
     * @param class-string $class
     */
    private function shortClassName(string $class): string
    {
        return basename(str_replace('\\', '/', $class));
    }

    private function operationKey(string $version, string $section, string $method, string $path): string
    {
        $section = trim($section, '/');
        $path    = trim($path, '/');
        $full    = '/' . trim(trim($version, '/') . '/' . trim($section . '/' . $path, '/'), '/');

        return strtoupper($method) . ' ' . $full;
    }

    private function wrapperDirectoryForVersion(string $wrapperDirectory, string $version, bool $isBatch): string
    {
        if (!$isBatch) {
            return $wrapperDirectory;
        }

        return $this->joinPath($wrapperDirectory, $this->versionNamespace($version));
    }

    private function clientVersionMethod(string $version): string
    {
        return strtolower(trim($version, '/'));
    }

    private function versionNamespace(string $version): string
    {
        $version = trim($version, '/');

        return strtoupper(substr($version, 0, 1)) . substr($version, 1);
    }

    private function dtoNamespaceSegmentFromPath(string $path, string $version): string
    {
        $segments = array_values(array_filter(
            explode('/', trim($path, '/')),
            static fn (string $segment): bool => $segment !== '' && !str_starts_with($segment, '{'),
        ));

        if (($segments[0] ?? null) === trim($version, '/')) {
            array_shift($segments);
        }

        $first  = $segments[0] ?? 'common';
        $second = $segments[1] ?? null;

        $parts = [$first];
        if ($second !== null && $this->shouldUseSecondNamespaceSegment($first, $second)) {
            $parts[] = $second;
        }

        return implode('', array_map(fn (string $part): string => $this->pathSegmentToNamespacePart($part), $parts));
    }

    private function shouldUseSecondNamespaceSegment(string $first, string $second): bool
    {
        if (in_array($first, ['fbp', 'fbs'], true)) {
            return true;
        }

        if ($first === 'posting' && in_array($second, ['fbo', 'fbs', 'multiboxqty'], true)) {
            return true;
        }

        if ($first === 'warehouse' && in_array($second, ['erfbs', 'fbo', 'fbs', 'rfbs'], true)) {
            return true;
        }

        return $first === 'product' && in_array($second, ['action', 'certificate', 'info', 'pictures'], true);
    }

    private function pathSegmentToNamespacePart(string $segment): string
    {
        $parts = preg_split('/[^A-Za-z0-9]+/', $segment) ?: [];
        $name  = '';
        foreach ($parts as $part) {
            if ($part === '') {
                continue;
            }

            $name .= ucfirst($part);
        }

        return $name === '' ? 'Common' : $name;
    }

    private function joinPath(string $directory, string $path): string
    {
        return rtrim($directory, '/\\') . '/' . trim($path, '/\\');
    }

    private function clearGeneratedDirectory(string $dir): void
    {
        foreach (glob($this->joinPath($dir, '*.php')) ?: [] as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }

        foreach (glob($this->joinPath($dir, '*')) ?: [] as $path) {
            if (is_dir($path)) {
                $this->clearGeneratedSubdirectory($path);
            }
        }
    }

    private function clearGeneratedSubdirectory(string $dir): void
    {
        foreach (glob($this->joinPath($dir, '*.php')) ?: [] as $file) {
            if (is_file($file) && str_contains((string) file_get_contents($file), '@generated Ozon OpenAPI DTO')) {
                unlink($file);
            }
        }

        foreach (glob($this->joinPath($dir, '*')) ?: [] as $path) {
            if (is_dir($path)) {
                $this->clearGeneratedSubdirectory($path);
            }
        }
    }

    private function ensureDirectory(string $dir): void
    {
        if (!is_dir($dir) && !mkdir($dir, 0775, true) && !is_dir($dir)) {
            throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }
    }
}
