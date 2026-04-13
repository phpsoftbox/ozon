<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfoArrivalAt $arrivalAt,
        public ?CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfoStatusEnum $status,
        public ?CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfoTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            arrivalAt: OzonDtoValue::object($payload['arrival_at'] ?? null, CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfoArrivalAt::class),
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfoStatusEnum::class),
            type: OzonDtoValue::scalarObject($payload['type'] ?? null, CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfoTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['arrival_at', 'status', 'type']),
        );
    }
}
