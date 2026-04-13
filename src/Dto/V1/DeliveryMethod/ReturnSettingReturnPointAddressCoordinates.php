<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnSettingReturnPointAddressCoordinates implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $latitude,
        public ?string $longitude,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            latitude: OzonDtoValue::string($payload['latitude'] ?? null),
            longitude: OzonDtoValue::string($payload['longitude'] ?? null),
            extra: OzonDtoValue::extra($payload, ['latitude', 'longitude']),
        );
    }
}
