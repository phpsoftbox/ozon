<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\CodeGeneration;

final readonly class OzonOpenApiDtoGeneratorOptions
{
    public function __construct(
        public string $specPath,
        public string $dtoDirectory,
        public string $responseMapPath,
        public string $wrapperDirectory,
        public string $version = 'v1',
        public bool $updateWrappers = false,
        public bool $cleanDtoDirectory = true,
    ) {
    }
}
