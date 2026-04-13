<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseAddressInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?float $latitude,
        public ?float $longitude,
        public ?string $utc,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            latitude: OzonDtoValue::float($payload['latitude'] ?? null),
            longitude: OzonDtoValue::float($payload['longitude'] ?? null),
            utc: OzonDtoValue::string($payload['utc'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address', 'latitude', 'longitude', 'utc']),
        );
    }
}
