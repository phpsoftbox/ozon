<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFboSellerListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1WarehouseFboSellerListResponseWarehouse> $warehouses
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
            warehouses: OzonDtoValue::objectList($payload['warehouses'] ?? null, V1WarehouseFboSellerListResponseWarehouse::class),
            extra: OzonDtoValue::extra($payload, ['warehouses']),
        );
    }
}
