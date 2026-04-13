<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DropOffWarehouseTimeslotsDay implements OzonDtoInterface
{
    /**
     * @param list<DropOffWarehouseTimeslotsDayTimeslot> $timeslots
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $dateInTimezone,
        public array $timeslots,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dateInTimezone: OzonDtoValue::string($payload['date_in_timezone'] ?? null),
            timeslots: OzonDtoValue::objectList($payload['timeslots'] ?? null, DropOffWarehouseTimeslotsDayTimeslot::class),
            extra: OzonDtoValue::extra($payload, ['date_in_timezone', 'timeslots']),
        );
    }
}
