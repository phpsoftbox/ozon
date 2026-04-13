<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ItemSize implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $heightMm,
        public ?int $lengthMm,
        public ?int $widthMm,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            heightMm: OzonDtoValue::int($payload['height_mm'] ?? null),
            lengthMm: OzonDtoValue::int($payload['length_mm'] ?? null),
            widthMm: OzonDtoValue::int($payload['width_mm'] ?? null),
            extra: OzonDtoValue::extra($payload, ['height_mm', 'length_mm', 'width_mm']),
        );
    }
}
