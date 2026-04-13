<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpWarehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbpWarehouseListResponseAddressDetailing implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $city,
        public ?string $country,
        public ?string $house,
        public ?string $region,
        public ?string $street,
        public ?string $zipcode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            city: OzonDtoValue::string($payload['city'] ?? null),
            country: OzonDtoValue::string($payload['country'] ?? null),
            house: OzonDtoValue::string($payload['house'] ?? null),
            region: OzonDtoValue::string($payload['region'] ?? null),
            street: OzonDtoValue::string($payload['street'] ?? null),
            zipcode: OzonDtoValue::string($payload['zipcode'] ?? null),
            extra: OzonDtoValue::extra($payload, ['city', 'country', 'house', 'region', 'street', 'zipcode']),
        );
    }
}
