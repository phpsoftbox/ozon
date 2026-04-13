<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ItemBundleSummary implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $roundedTotalVolumeInLitres,
        public ?int $totalItemCount,
        public ?int $totalQuantity,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            roundedTotalVolumeInLitres: OzonDtoValue::float($payload['rounded_total_volume_in_litres'] ?? null),
            totalItemCount: OzonDtoValue::int($payload['total_item_count'] ?? null),
            totalQuantity: OzonDtoValue::int($payload['total_quantity'] ?? null),
            extra: OzonDtoValue::extra($payload, ['rounded_total_volume_in_litres', 'total_item_count', 'total_quantity']),
        );
    }
}
