<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto;

final readonly class OzonEmptyDto implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self($payload);
    }
}
