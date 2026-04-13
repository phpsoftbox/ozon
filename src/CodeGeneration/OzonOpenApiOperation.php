<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\CodeGeneration;

final readonly class OzonOpenApiOperation
{
    public function __construct(
        public string $key,
        public string $method,
        public string $path,
        public string $class,
        public string $schemaName,
    ) {
    }
}
