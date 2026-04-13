<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ValidationResultItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ItemSize $size,
        public ?int $sku,
        public ?float $weightG,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            size: OzonDtoValue::object($payload['size'] ?? null, ItemSize::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            weightG: OzonDtoValue::float($payload['weight_g'] ?? null),
            extra: OzonDtoValue::extra($payload, ['size', 'sku', 'weight_g']),
        );
    }
}
