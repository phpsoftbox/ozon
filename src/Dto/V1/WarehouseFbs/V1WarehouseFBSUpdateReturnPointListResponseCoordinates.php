<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFBSUpdateReturnPointListResponseCoordinates implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $latitude,
        public ?float $longitude,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            latitude: OzonDtoValue::float($payload['latitude'] ?? null),
            longitude: OzonDtoValue::float($payload['longitude'] ?? null),
            extra: OzonDtoValue::extra($payload, ['latitude', 'longitude']),
        );
    }
}
