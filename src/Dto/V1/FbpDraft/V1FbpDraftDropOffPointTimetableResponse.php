<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftDropOffPointTimetableResponse implements OzonDtoInterface
{
    /**
     * @param list<V1FbpDraftDropOffPointTimetableResponseCalendar> $calendar
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
            calendar: OzonDtoValue::objectList($payload['calendar'] ?? null, V1FbpDraftDropOffPointTimetableResponseCalendar::class),
            extra: OzonDtoValue::extra($payload, ['calendar']),
        );
    }
}
