<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryPointInfoResponsePointDeliveryMethod implements OzonDtoInterface
{
    /**
     * @param list<DeliveryMethodHolidays> $holidays
     * @param list<string> $images
     * @param list<DeliveryMethodProperties> $properties
     * @param list<DeliveryMethodWorkingHours> $workingHours
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?DeliveryMethodAddressDetails $addressDetails,
        public ?PointDeliveryMethodCoordinates $coordinates,
        public ?DeliveryPointInfoResponsePointDeliveryMethodDeliveryType $deliveryType,
        public ?string $description,
        public ?int $fittingRoomsCount,
        public array $holidays,
        public ?bool $holidaysFilled,
        public array $images,
        public ?string $locationId,
        public ?int $mapPointId,
        public ?string $name,
        public array $properties,
        public ?int $pvzRating,
        public ?int $storagePeriod,
        public array $workingHours,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            addressDetails: OzonDtoValue::object($payload['address_details'] ?? null, DeliveryMethodAddressDetails::class),
            coordinates: OzonDtoValue::object($payload['coordinates'] ?? null, PointDeliveryMethodCoordinates::class),
            deliveryType: OzonDtoValue::object($payload['delivery_type'] ?? null, DeliveryPointInfoResponsePointDeliveryMethodDeliveryType::class),
            description: OzonDtoValue::string($payload['description'] ?? null),
            fittingRoomsCount: OzonDtoValue::int($payload['fitting_rooms_count'] ?? null),
            holidays: OzonDtoValue::objectList($payload['holidays'] ?? null, DeliveryMethodHolidays::class),
            holidaysFilled: OzonDtoValue::bool($payload['holidays_filled'] ?? null),
            images: OzonDtoValue::array($payload['images'] ?? null),
            locationId: OzonDtoValue::string($payload['location_id'] ?? null),
            mapPointId: OzonDtoValue::int($payload['map_point_id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            properties: OzonDtoValue::objectList($payload['properties'] ?? null, DeliveryMethodProperties::class),
            pvzRating: OzonDtoValue::int($payload['pvz_rating'] ?? null),
            storagePeriod: OzonDtoValue::int($payload['storage_period'] ?? null),
            workingHours: OzonDtoValue::objectList($payload['working_hours'] ?? null, DeliveryMethodWorkingHours::class),
            extra: OzonDtoValue::extra($payload, ['address', 'address_details', 'coordinates', 'delivery_type', 'description', 'fitting_rooms_count', 'holidays', 'holidays_filled', 'images', 'location_id', 'map_point_id', 'name', 'properties', 'pvz_rating', 'storage_period', 'working_hours']),
        );
    }
}
