<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryCheckoutResponseSplitDeliveryMethod implements OzonDtoInterface
{
    /**
     * @param list<DeliveryMethodTimeslot> $timeslots
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $deliveryTimeZoneOffset,
        public ?DeliveryMethodDeliveryTypeEnum $deliveryType,
        public ?int $id,
        public ?string $name,
        public array $timeslots,
        public ?DeliveryCheckoutResponseUnavailableReasonEnum $unavailableReason,
        public ?int $warehouseTimeZoneOffset,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliveryTimeZoneOffset: OzonDtoValue::int($payload['delivery_time_zone_offset'] ?? null),
            deliveryType: OzonDtoValue::object($payload['delivery_type'] ?? null, DeliveryMethodDeliveryTypeEnum::class),
            id: OzonDtoValue::int($payload['id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            timeslots: OzonDtoValue::objectList($payload['timeslots'] ?? null, DeliveryMethodTimeslot::class),
            unavailableReason: OzonDtoValue::object($payload['unavailable_reason'] ?? null, DeliveryCheckoutResponseUnavailableReasonEnum::class),
            warehouseTimeZoneOffset: OzonDtoValue::int($payload['warehouse_time_zone_offset'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_time_zone_offset', 'delivery_type', 'id', 'name', 'timeslots', 'unavailable_reason', 'warehouse_time_zone_offset']),
        );
    }
}
