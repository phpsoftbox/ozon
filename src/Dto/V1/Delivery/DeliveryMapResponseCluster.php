<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMapResponseCluster implements OzonDtoInterface
{
    /**
     * @param list<string> $mapPointIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DeliveryMapResponseClusterCoordinates $coordinate,
        public ?bool $isSameBuilding,
        public array $mapPointIds,
        public ?int $pointsCount,
        public ?DeliveryMapResponseClusterViewport $viewport,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            coordinate: OzonDtoValue::object($payload['coordinate'] ?? null, DeliveryMapResponseClusterCoordinates::class),
            isSameBuilding: OzonDtoValue::bool($payload['is_same_building'] ?? null),
            mapPointIds: OzonDtoValue::array($payload['map_point_ids'] ?? null),
            pointsCount: OzonDtoValue::int($payload['points_count'] ?? null),
            viewport: OzonDtoValue::object($payload['viewport'] ?? null, DeliveryMapResponseClusterViewport::class),
            extra: OzonDtoValue::extra($payload, ['coordinate', 'is_same_building', 'map_point_ids', 'points_count', 'viewport']),
        );
    }
}
