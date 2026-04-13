<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DeliveryPointListResponsePoint implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DeliveryPointListResponsePointCoordinates $coordinate,
        public ?int $mapPointId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            coordinate: OzonDtoValue::object($payload['coordinate'] ?? null, DeliveryPointListResponsePointCoordinates::class),
            mapPointId: OzonDtoValue::int($payload['map_point_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['coordinate', 'map_point_id']),
        );
    }
}
