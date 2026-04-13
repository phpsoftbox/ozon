<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ResultDropOffWarehouseTimeslots implements OzonDtoInterface
{
    /**
     * @param list<DropOffWarehouseTimeslotsDay> $days
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $currentTimeInTimezone,
        public array $days,
        public ?string $warehouseTimezone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            currentTimeInTimezone: OzonDtoValue::string($payload['current_time_in_timezone'] ?? null),
            days: OzonDtoValue::objectList($payload['days'] ?? null, DropOffWarehouseTimeslotsDay::class),
            warehouseTimezone: OzonDtoValue::string($payload['warehouse_timezone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['current_time_in_timezone', 'days', 'warehouse_timezone']),
        );
    }
}
