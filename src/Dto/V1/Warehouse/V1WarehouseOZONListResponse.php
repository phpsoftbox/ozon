<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseOZONListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1WarehouseOZONListResponseWarehouse> $warehouses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $warehouses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            warehouses: OzonDtoValue::objectList($payload['warehouses'] ?? null, V1WarehouseOZONListResponseWarehouse::class),
            extra: OzonDtoValue::extra($payload, ['warehouses']),
        );
    }
}
