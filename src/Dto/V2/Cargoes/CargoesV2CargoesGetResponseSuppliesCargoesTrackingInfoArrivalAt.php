<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfoArrivalAt implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $date,
        public ?CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfoArrivalAtTimezoneInfo $timezoneInfo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            date: OzonDtoValue::string($payload['date'] ?? null),
            timezoneInfo: OzonDtoValue::object($payload['timezone_info'] ?? null, CargoesV2CargoesGetResponseSuppliesCargoesTrackingInfoArrivalAtTimezoneInfo::class),
            extra: OzonDtoValue::extra($payload, ['date', 'timezone_info']),
        );
    }
}
