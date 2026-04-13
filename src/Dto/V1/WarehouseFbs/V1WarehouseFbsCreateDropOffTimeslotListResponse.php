<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFbsCreateDropOffTimeslotListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1WarehouseFbsCreateDropOffTimeslotListResponseTimeslot> $timeslots
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $timeslots,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            timeslots: OzonDtoValue::objectList($payload['timeslots'] ?? null, V1WarehouseFbsCreateDropOffTimeslotListResponseTimeslot::class),
            extra: OzonDtoValue::extra($payload, ['timeslots']),
        );
    }
}
