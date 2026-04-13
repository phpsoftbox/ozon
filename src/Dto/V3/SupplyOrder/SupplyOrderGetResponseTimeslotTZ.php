<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderGetResponseTimeslotTZ implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?TimeslotTZTimeslot $timeslot,
        public ?TimeslotTZTimezoneInfo $timezoneInfo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            timeslot: OzonDtoValue::object($payload['timeslot'] ?? null, TimeslotTZTimeslot::class),
            timezoneInfo: OzonDtoValue::object($payload['timezone_info'] ?? null, TimeslotTZTimezoneInfo::class),
            extra: OzonDtoValue::extra($payload, ['timeslot', 'timezone_info']),
        );
    }
}
