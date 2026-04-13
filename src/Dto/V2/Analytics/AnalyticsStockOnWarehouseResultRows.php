<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsStockOnWarehouseResultRows implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $sku,
        public ?string $itemCode,
        public ?string $itemName,
        public ?int $freeToSellAmount,
        public ?int $promisedAmount,
        public ?int $reservedAmount,
        public ?string $warehouseName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            itemCode: OzonDtoValue::string($payload['item_code'] ?? null),
            itemName: OzonDtoValue::string($payload['item_name'] ?? null),
            freeToSellAmount: OzonDtoValue::int($payload['free_to_sell_amount'] ?? null),
            promisedAmount: OzonDtoValue::int($payload['promised_amount'] ?? null),
            reservedAmount: OzonDtoValue::int($payload['reserved_amount'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['sku', 'item_code', 'item_name', 'free_to_sell_amount', 'promised_amount', 'reserved_amount', 'warehouse_name']),
        );
    }
}
