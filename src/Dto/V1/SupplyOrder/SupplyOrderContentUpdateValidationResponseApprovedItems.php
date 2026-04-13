<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderContentUpdateValidationResponseApprovedItems implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $barcode,
        public ?string $itemLink,
        public ?string $name,
        public ?string $offerId,
        public ?int $originQuantity,
        public ?float $originTotalVolumeInLitres,
        public ?int $quant,
        public ?int $quantity,
        public ?int $sku,
        public ?int $skuQuantityLimit,
        public ?float $totalVolumeInLitres,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            itemLink: OzonDtoValue::string($payload['item_link'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            originQuantity: OzonDtoValue::int($payload['origin_quantity'] ?? null),
            originTotalVolumeInLitres: OzonDtoValue::float($payload['origin_total_volume_in_litres'] ?? null),
            quant: OzonDtoValue::int($payload['quant'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            skuQuantityLimit: OzonDtoValue::int($payload['sku_quantity_limit'] ?? null),
            totalVolumeInLitres: OzonDtoValue::float($payload['total_volume_in_litres'] ?? null),
            extra: OzonDtoValue::extra($payload, ['barcode', 'item_link', 'name', 'offer_id', 'origin_quantity', 'origin_total_volume_in_litres', 'quant', 'quantity', 'sku', 'sku_quantity_limit', 'total_volume_in_litres']),
        );
    }
}
