<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1DayOfWeek;

final readonly class V1FbpOrderDropOffTimetableResponseCalendar implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1FbpOrderDropOffTimetableResponseCalendarCalendarItem $calendarItem,
        public ?V1DayOfWeek $dayOfWeek,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            calendarItem: OzonDtoValue::object($payload['calendar_item'] ?? null, V1FbpOrderDropOffTimetableResponseCalendarCalendarItem::class),
            dayOfWeek: OzonDtoValue::object($payload['day_of_week'] ?? null, V1DayOfWeek::class),
            extra: OzonDtoValue::extra($payload, ['calendar_item', 'day_of_week']),
        );
    }
}
