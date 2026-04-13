<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoStocksResponseStock implements OzonDtoInterface
{
    /**
     * @param list<int> $warehouseIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $present,
        public ?int $reserved,
        public ?StockShipmentType $shipmentType,
        public ?int $sku,
        public ?string $type,
        public array $warehouseIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            present: OzonDtoValue::int($payload['present'] ?? null),
            reserved: OzonDtoValue::int($payload['reserved'] ?? null),
            shipmentType: OzonDtoValue::object($payload['shipment_type'] ?? null, StockShipmentType::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            type: OzonDtoValue::string($payload['type'] ?? null),
            warehouseIds: OzonDtoValue::array($payload['warehouse_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['present', 'reserved', 'shipment_type', 'sku', 'type', 'warehouse_ids']),
        );
    }
}
