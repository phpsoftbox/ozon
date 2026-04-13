<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseTimetable implements OzonDtoInterface
{
    /**
     * @param list<TimetableWorkingHours> $workingHours
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $timetableFrom,
        public ?string $timetableTo,
        public array $workingHours,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            timetableFrom: OzonDtoValue::string($payload['timetable_from'] ?? null),
            timetableTo: OzonDtoValue::string($payload['timetable_to'] ?? null),
            workingHours: OzonDtoValue::objectList($payload['working_hours'] ?? null, TimetableWorkingHours::class),
            extra: OzonDtoValue::extra($payload, ['timetable_from', 'timetable_to', 'working_hours']),
        );
    }
}
