<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyCargoInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $bundleId,
        public ?int $cargoId,
        public ?CargoInfoContentTypeEnum $contentType,
        public ?CargoInfoPlacementZoneTypeEnum $placementZoneType,
        public ?CargoInfoTrackingInfo $trackingInfo,
        public ?SupplyCargoInfoTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            cargoId: OzonDtoValue::int($payload['cargo_id'] ?? null),
            contentType: OzonDtoValue::object($payload['content_type'] ?? null, CargoInfoContentTypeEnum::class),
            placementZoneType: OzonDtoValue::object($payload['placement_zone_type'] ?? null, CargoInfoPlacementZoneTypeEnum::class),
            trackingInfo: OzonDtoValue::object($payload['tracking_info'] ?? null, CargoInfoTrackingInfo::class),
            type: OzonDtoValue::object($payload['type'] ?? null, SupplyCargoInfoTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['bundle_id', 'cargo_id', 'content_type', 'placement_zone_type', 'tracking_info', 'type']),
        );
    }
}
