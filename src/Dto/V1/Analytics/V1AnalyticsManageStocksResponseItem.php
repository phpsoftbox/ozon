<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AnalyticsManageStocksResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $defectStockCount,
        public ?int $expiringStockCount,
        public ?string $name,
        public ?string $offerId,
        public ?int $sku,
        public ?int $validStockCount,
        public ?int $waitingdocsStockCount,
        public ?string $warehouseName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            defectStockCount: OzonDtoValue::int($payload['defect_stock_count'] ?? null),
            expiringStockCount: OzonDtoValue::int($payload['expiring_stock_count'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            validStockCount: OzonDtoValue::int($payload['valid_stock_count'] ?? null),
            waitingdocsStockCount: OzonDtoValue::int($payload['waitingdocs_stock_count'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['defect_stock_count', 'expiring_stock_count', 'name', 'offer_id', 'sku', 'valid_stock_count', 'waitingdocs_stock_count', 'warehouse_name']),
        );
    }
}
