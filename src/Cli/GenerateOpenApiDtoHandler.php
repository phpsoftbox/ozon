<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Cli;

use PhpSoftBox\CliApp\Command\HandlerInterface;
use PhpSoftBox\CliApp\Response;
use PhpSoftBox\CliApp\Runner\RunnerInterface;
use PhpSoftBox\Ozon\CodeGeneration\OzonOpenApiDtoGenerator;
use PhpSoftBox\Ozon\CodeGeneration\OzonOpenApiDtoGeneratorOptions;

use function getcwd;
use function is_string;
use function preg_match;
use function sprintf;
use function str_contains;
use function str_starts_with;
use function strtoupper;
use function substr;
use function trim;

final readonly class GenerateOpenApiDtoHandler implements HandlerInterface
{
    public function __construct(
        private OzonOpenApiDtoGenerator $generator = new OzonOpenApiDtoGenerator(),
    ) {
    }

    public function run(RunnerInterface $runner): int|Response
    {
        $root = getcwd();
        if ($root === false) {
            $runner->io()->writeln('Не удалось определить рабочую директорию.', 'error');

            return Response::FAILURE;
        }

        $version         = $this->stringOption($runner, 'version', 'all');
        $wrappersDefault = $this->isBatchVersion($version) ? 'src' : 'src/' . $this->versionNamespace($version);
        $result          = $this->generator->generate(new OzonOpenApiDtoGeneratorOptions(
            specPath: $this->pathOption($runner, $root, 'spec', 'docs/swagger.json'),
            dtoDirectory: $this->pathOption($runner, $root, 'output', 'src/Dto'),
            responseMapPath: $this->pathOption($runner, $root, 'map', 'src/Dto/OzonResponseDtoMap.php'),
            wrapperDirectory: $this->pathOption($runner, $root, 'wrappers', $wrappersDefault),
            version: $version,
            updateWrappers: $this->boolOption($runner, 'update-wrappers'),
            cleanDtoDirectory: !$this->boolOption($runner, 'keep-existing-dto'),
        ));

        $runner->io()->writeln(sprintf(
            'Сгенерировано DTO: %d, response mappings: %d, обновлено wrappers: %d.',
            $result->generatedClasses,
            $result->responseMappings,
            $result->updatedWrappers,
        ), 'success');

        return Response::SUCCESS;
    }

    private function stringOption(RunnerInterface $runner, string $name, string $default): string
    {
        $value = $runner->request()->option($name, $default);

        return is_string($value) && trim($value) !== '' ? trim($value) : $default;
    }

    private function boolOption(RunnerInterface $runner, string $name): bool
    {
        return (bool) $runner->request()->option($name, false);
    }

    private function pathOption(RunnerInterface $runner, string $root, string $name, string $default): string
    {
        $path = $this->stringOption($runner, $name, $default);
        if (str_starts_with($path, '/') || preg_match('~^[A-Za-z]:\\\\~', $path) === 1) {
            return $path;
        }

        return $root . '/' . $path;
    }

    private function versionNamespace(string $version): string
    {
        $version = trim($version, '/');

        return strtoupper($version[0] ?? 'v') . substr($version, 1);
    }

    private function isBatchVersion(string $version): bool
    {
        $version = trim($version);

        return $version === '' || $version === 'all' || $version === '*' || str_contains($version, ',');
    }
}
