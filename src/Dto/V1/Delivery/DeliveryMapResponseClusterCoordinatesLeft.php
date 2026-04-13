<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMapResponseClusterCoordinatesLeft implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $lat,
        public ?float $long,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            lat: OzonDtoValue::float($payload['lat'] ?? null),
            long: OzonDtoValue::float($payload['long'] ?? null),
            extra: OzonDtoValue::extra($payload, ['lat', 'long']),
        );
    }
}
