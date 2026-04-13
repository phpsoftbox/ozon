<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\CodeGeneration;

final readonly class OzonOpenApiDtoGeneratorResult
{
    public function __construct(
        public int $generatedClasses,
        public int $responseMappings,
        public int $updatedWrappers,
    ) {
    }
}
