<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpOrderDropOffTimetableResponse implements OzonDtoInterface
{
    /**
     * @param list<V1FbpOrderDropOffTimetableResponseCalendar> $calendar
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $calendar,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            calendar: OzonDtoValue::objectList($payload['calendar'] ?? null, V1FbpOrderDropOffTimetableResponseCalendar::class),
            extra: OzonDtoValue::extra($payload, ['calendar']),
        );
    }
}
