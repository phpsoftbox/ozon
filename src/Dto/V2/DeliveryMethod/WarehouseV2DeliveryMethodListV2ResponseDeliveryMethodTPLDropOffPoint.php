<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseV2DeliveryMethodListV2ResponseDeliveryMethodTPLDropOffPoint implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?WarehouseV2DeliveryMethodListV2ResponseDeliveryMethodTPLDropOffPointAddressCoordinates $addressCoordinates,
        public ?string $code,
        public ?string $name,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            addressCoordinates: OzonDtoValue::object($payload['address_coordinates'] ?? null, WarehouseV2DeliveryMethodListV2ResponseDeliveryMethodTPLDropOffPointAddressCoordinates::class),
            code: OzonDtoValue::string($payload['code'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address', 'address_coordinates', 'code', 'name']),
        );
    }
}
