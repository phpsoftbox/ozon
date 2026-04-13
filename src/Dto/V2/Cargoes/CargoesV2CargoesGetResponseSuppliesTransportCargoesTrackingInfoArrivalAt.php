<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfoArrivalAt implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $date,
        public ?CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfoArrivalAtTimezone $timezone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            date: OzonDtoValue::string($payload['date'] ?? null),
            timezone: OzonDtoValue::object($payload['timezone'] ?? null, CargoesV2CargoesGetResponseSuppliesTransportCargoesTrackingInfoArrivalAtTimezone::class),
            extra: OzonDtoValue::extra($payload, ['date', 'timezone']),
        );
    }
}
