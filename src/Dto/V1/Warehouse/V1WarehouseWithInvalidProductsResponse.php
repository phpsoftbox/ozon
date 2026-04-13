<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseWithInvalidProductsResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $warehouseIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $warehouseIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            warehouseIds: OzonDtoValue::array($payload['warehouse_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['warehouse_ids']),
        );
    }
}
