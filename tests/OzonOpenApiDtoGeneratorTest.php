<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Ozon\CodeGeneration\OzonOpenApiDtoGenerator;
use PhpSoftBox\Ozon\CodeGeneration\OzonOpenApiDtoGeneratorOptions;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

use function bin2hex;
use function file_get_contents;
use function glob;
use function mkdir;
use function random_bytes;
use function rmdir;
use function sys_get_temp_dir;
use function unlink;

#[CoversClass(OzonOpenApiDtoGenerator::class)]
#[CoversMethod(OzonOpenApiDtoGenerator::class, 'generate')]
final class OzonOpenApiDtoGeneratorTest extends TestCase
{
    /**
     * Проверяет повторяемую генерацию массива без type и скалярных ссылок для одного ответа.
     *
     * @see OzonOpenApiDtoGenerator::generate()
     */
    #[Test]
    public function generatesInferredArraysAndScalarReferences(): void
    {
        $directory = sys_get_temp_dir() . '/ozon-dto-test-' . bin2hex(random_bytes(8));
        mkdir($directory);

        try {
            $options = new OzonOpenApiDtoGeneratorOptions(
                specPath: __DIR__ . '/Fixtures/dto-generation.json',
                dtoDirectory: $directory . '/Dto',
                responseMapPath: $directory . '/Map.php',
                wrapperDirectory: $directory . '/Wrappers',
                version: 'all',
            );
            $generator = new OzonOpenApiDtoGenerator();

            $result = $generator->generate($options);
            $files  = glob($directory . '/Dto/V1/*/AuditResponse.php');
            self::assertCount(1, $files);
            $code = file_get_contents($files[0]);

            self::assertSame(3, $result->generatedClasses);
            self::assertSame(1, $result->responseMappings);
            self::assertStringContainsString('list<AuditItem>', $code);
            self::assertStringContainsString('OzonDtoValue::objectList(', $code);
            self::assertStringContainsString('OzonDtoValue::scalarObject(', $code);
            self::assertStringContainsString('OzonDtoValue::scalarObjectList(', $code);

            $generator->generate($options);
            self::assertSame($code, file_get_contents($files[0]));
        } finally {
            $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::CHILD_FIRST,
            );

            foreach ($files as $file) {
                if ($file->isDir()) {
                    rmdir($file->getPathname());
                } else {
                    unlink($file->getPathname());
                }
            }
            rmdir($directory);
        }
    }
}
