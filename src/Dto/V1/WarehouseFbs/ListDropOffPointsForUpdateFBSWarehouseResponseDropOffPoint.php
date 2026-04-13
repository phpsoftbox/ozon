<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ListDropOffPointsForUpdateFBSWarehouseResponseDropOffPoint implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?DropOffPointCoordinates $coordinates,
        public ?float $discountPercent,
        public ?string $id,
        public ?TypeTimeOfDay $lastTransitTimeLocal,
        public ?ListDropOffPointsForUpdateFBSWarehouseResponseDropOffPointDropOffPointTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            coordinates: OzonDtoValue::object($payload['coordinates'] ?? null, DropOffPointCoordinates::class),
            discountPercent: OzonDtoValue::float($payload['discount_percent'] ?? null),
            id: OzonDtoValue::string($payload['id'] ?? null),
            lastTransitTimeLocal: OzonDtoValue::object($payload['last_transit_time_local'] ?? null, TypeTimeOfDay::class),
            type: OzonDtoValue::object($payload['type'] ?? null, ListDropOffPointsForUpdateFBSWarehouseResponseDropOffPointDropOffPointTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['address', 'coordinates', 'discount_percent', 'id', 'last_transit_time_local', 'type']),
        );
    }
}
