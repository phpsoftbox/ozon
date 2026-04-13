<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2WarehouseListV2Response implements OzonDtoInterface
{
    /**
     * @param list<WarehouseListV2ResponseWarehouse> $warehouses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public array $warehouses,
        public ?bool $hasNext,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            warehouses: OzonDtoValue::objectList($payload['warehouses'] ?? null, WarehouseListV2ResponseWarehouse::class),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cursor', 'warehouses', 'has_next']),
        );
    }
}
