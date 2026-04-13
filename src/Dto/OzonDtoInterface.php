<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto;

interface OzonDtoInterface
{
    /**
     * @param array<string, mixed> $payload
     */
    public static function fromArray(array $payload): static;
}
