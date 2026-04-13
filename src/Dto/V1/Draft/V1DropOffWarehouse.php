<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DropOffWarehouse implements OzonDtoInterface
{
    /**
     * @param list<V1Day> $days
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $currentTimeInTimezone,
        public array $days,
        public ?int $dropOffWarehouseId,
        public ?string $warehouseTimezone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            currentTimeInTimezone: OzonDtoValue::string($payload['current_time_in_timezone'] ?? null),
            days: OzonDtoValue::objectList($payload['days'] ?? null, V1Day::class),
            dropOffWarehouseId: OzonDtoValue::int($payload['drop_off_warehouse_id'] ?? null),
            warehouseTimezone: OzonDtoValue::string($payload['warehouse_timezone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['current_time_in_timezone', 'days', 'drop_off_warehouse_id', 'warehouse_timezone']),
        );
    }
}
