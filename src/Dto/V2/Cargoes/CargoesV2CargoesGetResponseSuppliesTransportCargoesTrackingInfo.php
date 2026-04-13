<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfoArrivalAt $arrivalAt,
        public ?CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfoStatusEnum $status,
        public ?CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfoTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            arrivalAt: OzonDtoValue::object($payload['arrival_at'] ?? null, CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfoArrivalAt::class),
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfoStatusEnum::class),
            type: OzonDtoValue::scalarObject($payload['type'] ?? null, CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfoTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['arrival_at', 'status', 'type']),
        );
    }
}
