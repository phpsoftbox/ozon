<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderDetailsResponseTimeslotValue implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?TimeslotValueTimeslot $timeslot,
        public ?ValueTimezoneInfo $timezoneInfo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            timeslot: OzonDtoValue::object($payload['timeslot'] ?? null, TimeslotValueTimeslot::class),
            timezoneInfo: OzonDtoValue::object($payload['timezone_info'] ?? null, ValueTimezoneInfo::class),
            extra: OzonDtoValue::extra($payload, ['timeslot', 'timezone_info']),
        );
    }
}
