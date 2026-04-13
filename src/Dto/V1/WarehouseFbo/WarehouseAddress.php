<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseAddress implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?string $city,
        public ?WarehouseAddressCoordinates $coordinates,
        public ?string $countryCode,
        public ?int $macrolocalClusterId,
        public ?string $region,
        public ?string $timezone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            city: OzonDtoValue::string($payload['city'] ?? null),
            coordinates: OzonDtoValue::object($payload['coordinates'] ?? null, WarehouseAddressCoordinates::class),
            countryCode: OzonDtoValue::string($payload['country_code'] ?? null),
            macrolocalClusterId: OzonDtoValue::int($payload['macrolocal_cluster_id'] ?? null),
            region: OzonDtoValue::string($payload['region'] ?? null),
            timezone: OzonDtoValue::string($payload['timezone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address', 'city', 'coordinates', 'country_code', 'macrolocal_cluster_id', 'region', 'timezone']),
        );
    }
}
