<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpOrderDropOffTimetableResponseCalendarCalendarItemTimeslotWithTime implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $timeslotEnd,
        public ?string $timeslotStart,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            timeslotEnd: OzonDtoValue::string($payload['timeslot_end'] ?? null),
            timeslotStart: OzonDtoValue::string($payload['timeslot_start'] ?? null),
            extra: OzonDtoValue::extra($payload, ['timeslot_end', 'timeslot_start']),
        );
    }
}
