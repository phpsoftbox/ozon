<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpWarehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpWarehouseListResponse implements OzonDtoInterface
{
    /**
     * @param list<FbpWarehouseListResponseWarehouse> $warehouses
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
            warehouses: OzonDtoValue::objectList($payload['warehouses'] ?? null, FbpWarehouseListResponseWarehouse::class),
            extra: OzonDtoValue::extra($payload, ['warehouses']),
        );
    }
}
