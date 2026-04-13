<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftDropOffPointTimetableResponseCalendarCalendarItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1FbpDraftDropOffPointTimetableResponseCalendarCalendarItemTimeslotWithTime $breakHours,
        public ?bool $isHoliday,
        public ?V1FbpDraftDropOffPointTimetableResponseCalendarCalendarItemTimeslotWithTimeOpening $openingHours,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            breakHours: OzonDtoValue::object($payload['break_hours'] ?? null, V1FbpDraftDropOffPointTimetableResponseCalendarCalendarItemTimeslotWithTime::class),
            isHoliday: OzonDtoValue::bool($payload['is_holiday'] ?? null),
            openingHours: OzonDtoValue::object($payload['opening_hours'] ?? null, V1FbpDraftDropOffPointTimetableResponseCalendarCalendarItemTimeslotWithTimeOpening::class),
            extra: OzonDtoValue::extra($payload, ['break_hours', 'is_holiday', 'opening_hours']),
        );
    }
}
