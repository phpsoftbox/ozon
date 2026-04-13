<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3Address implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $addressTail,
        public ?string $city,
        public ?string $comment,
        public ?string $country,
        public ?string $district,
        public ?float $latitude,
        public ?float $longitude,
        public ?string $providerPvzCode,
        public ?int $pvzCode,
        public ?string $region,
        public ?string $zipCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            addressTail: OzonDtoValue::string($payload['address_tail'] ?? null),
            city: OzonDtoValue::string($payload['city'] ?? null),
            comment: OzonDtoValue::string($payload['comment'] ?? null),
            country: OzonDtoValue::string($payload['country'] ?? null),
            district: OzonDtoValue::string($payload['district'] ?? null),
            latitude: OzonDtoValue::float($payload['latitude'] ?? null),
            longitude: OzonDtoValue::float($payload['longitude'] ?? null),
            providerPvzCode: OzonDtoValue::string($payload['provider_pvz_code'] ?? null),
            pvzCode: OzonDtoValue::int($payload['pvz_code'] ?? null),
            region: OzonDtoValue::string($payload['region'] ?? null),
            zipCode: OzonDtoValue::string($payload['zip_code'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address_tail', 'city', 'comment', 'country', 'district', 'latitude', 'longitude', 'provider_pvz_code', 'pvz_code', 'region', 'zip_code']),
        );
    }
}
