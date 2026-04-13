<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Productsv1GetProductInfoStocksByWarehouseFbsResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $sku,
        public ?string $offerId,
        public ?int $present,
        public ?int $productId,
        public ?int $reserved,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            present: OzonDtoValue::int($payload['present'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            reserved: OzonDtoValue::int($payload['reserved'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['sku', 'offer_id', 'present', 'product_id', 'reserved', 'warehouse_id', 'warehouse_name']),
        );
    }
}
