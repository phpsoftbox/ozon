<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMethodAddressDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $city,
        public ?string $house,
        public ?string $region,
        public ?string $street,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            city: OzonDtoValue::string($payload['city'] ?? null),
            house: OzonDtoValue::string($payload['house'] ?? null),
            region: OzonDtoValue::string($payload['region'] ?? null),
            street: OzonDtoValue::string($payload['street'] ?? null),
            extra: OzonDtoValue::extra($payload, ['city', 'house', 'region', 'street']),
        );
    }
}
