<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductInfoWarehouseStocksResponseStocks implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $freeStock,
        public ?string $offerId,
        public ?int $present,
        public ?int $productId,
        public ?int $reserved,
        public ?int $sku,
        public ?string $updatedAt,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            freeStock: OzonDtoValue::int($payload['free_stock'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            present: OzonDtoValue::int($payload['present'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            reserved: OzonDtoValue::int($payload['reserved'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['free_stock', 'offer_id', 'present', 'product_id', 'reserved', 'sku', 'updated_at', 'warehouse_id']),
        );
    }
}
