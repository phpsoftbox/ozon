<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetSupplyOrderTimeslotsResponse implements OzonDtoInterface
{
    /**
     * @param list<V1SupplyOrderTimeslot> $timeslots
     * @param array<array-key, mixed> $timezone
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $timeslots,
        public array $timezone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            timeslots: OzonDtoValue::objectList($payload['timeslots'] ?? null, V1SupplyOrderTimeslot::class),
            timezone: OzonDtoValue::array($payload['timezone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['timeslots', 'timezone']),
        );
    }
}
