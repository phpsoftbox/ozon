<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseFBSReturnMileInfoResponseWarehouseReturnMileSettings implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isReturnMileRequired,
        public ?V1WarehouseFBSReturnMileInfoResponseReturnPoint $returnPoint,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isReturnMileRequired: OzonDtoValue::bool($payload['is_return_mile_required'] ?? null),
            returnPoint: OzonDtoValue::object($payload['return_point'] ?? null, V1WarehouseFBSReturnMileInfoResponseReturnPoint::class),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_return_mile_required', 'return_point', 'warehouse_id']),
        );
    }
}
