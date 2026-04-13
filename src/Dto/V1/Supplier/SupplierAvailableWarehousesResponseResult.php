<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Supplier;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplierAvailableWarehousesResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplierAvailableWarehousesResponseSchedule $schedule,
        public ?SupplierAvailableWarehousesResponseWarehouse $warehouse,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            schedule: OzonDtoValue::object($payload['schedule'] ?? null, SupplierAvailableWarehousesResponseSchedule::class),
            warehouse: OzonDtoValue::object($payload['warehouse'] ?? null, SupplierAvailableWarehousesResponseWarehouse::class),
            extra: OzonDtoValue::extra($payload, ['schedule', 'warehouse']),
        );
    }
}
