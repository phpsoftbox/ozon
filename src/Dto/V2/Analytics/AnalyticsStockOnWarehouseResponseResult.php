<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsStockOnWarehouseResponseResult implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsStockOnWarehouseResultRows> $rows
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $rows,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            rows: OzonDtoValue::objectList($payload['rows'] ?? null, AnalyticsStockOnWarehouseResultRows::class),
            extra: OzonDtoValue::extra($payload, ['rows']),
        );
    }
}
