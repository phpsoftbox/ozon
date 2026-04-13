<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFbsCreatePickUpTimeslotListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1WarehouseFbsCreatePickUpTimeslotListResponseTimeslot> $timeslots
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isPickupSupported,
        public array $timeslots,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isPickupSupported: OzonDtoValue::bool($payload['is_pickup_supported'] ?? null),
            timeslots: OzonDtoValue::objectList($payload['timeslots'] ?? null, V1WarehouseFbsCreatePickUpTimeslotListResponseTimeslot::class),
            extra: OzonDtoValue::extra($payload, ['is_pickup_supported', 'timeslots']),
        );
    }
}
