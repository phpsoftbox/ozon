<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesGetResponseSuppliesTransportCargoes implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $boxCount,
        public ?string $summaryBundleId,
        public ?CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfo $trackingInfo,
        public ?int $transportCargoId,
        public ?CargoesV2CargoesGetResponseSuppliesTransportCargoesTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            boxCount: OzonDtoValue::int($payload['box_count'] ?? null),
            summaryBundleId: OzonDtoValue::string($payload['summary_bundle_id'] ?? null),
            trackingInfo: OzonDtoValue::object($payload['tracking_info'] ?? null, CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfo::class),
            transportCargoId: OzonDtoValue::int($payload['transport_cargo_id'] ?? null),
            type: OzonDtoValue::scalarObject($payload['type'] ?? null, CargoesV2CargoesGetResponseSuppliesTransportCargoesTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['box_count', 'summary_bundle_id', 'tracking_info', 'transport_cargo_id', 'type']),
        );
    }
}
