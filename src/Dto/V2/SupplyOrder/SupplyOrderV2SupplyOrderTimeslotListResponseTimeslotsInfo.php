<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfo implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfoTimeslots> $timeslots
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfoLimitations $limitations,
        public array $timeslots,
        public ?SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfoTimezone $timezone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            limitations: OzonDtoValue::object($payload['limitations'] ?? null, SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfoLimitations::class),
            timeslots: OzonDtoValue::objectList($payload['timeslots'] ?? null, SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfoTimeslots::class),
            timezone: OzonDtoValue::object($payload['timezone'] ?? null, SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfoTimezone::class),
            extra: OzonDtoValue::extra($payload, ['limitations', 'timeslots', 'timezone']),
        );
    }
}
