<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesGetResponseSuppliesCargoes implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $bundleId,
        public ?int $cargoId,
        public ?CargoesV2CargoesGetResponseSuppliesCargoesContentTypeEnum $contentType,
        public ?CargoesV2CargoesGetResponseSuppliesCargoesPlacementZoneTypeEnum $placementZoneType,
        public ?CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfo $trackingInfo,
        public ?int $transportCargoId,
        public ?CargoesV2CargoesGetResponseSuppliesCargoesTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            cargoId: OzonDtoValue::int($payload['cargo_id'] ?? null),
            contentType: OzonDtoValue::scalarObject($payload['content_type'] ?? null, CargoesV2CargoesGetResponseSuppliesCargoesContentTypeEnum::class),
            placementZoneType: OzonDtoValue::scalarObject($payload['placement_zone_type'] ?? null, CargoesV2CargoesGetResponseSuppliesCargoesPlacementZoneTypeEnum::class),
            trackingInfo: OzonDtoValue::object($payload['tracking_info'] ?? null, CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfo::class),
            transportCargoId: OzonDtoValue::int($payload['transport_cargo_id'] ?? null),
            type: OzonDtoValue::scalarObject($payload['type'] ?? null, CargoesV2CargoesGetResponseSuppliesCargoesTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['bundle_id', 'cargo_id', 'content_type', 'placement_zone_type', 'tracking_info', 'transport_cargo_id', 'type']),
        );
    }
}
