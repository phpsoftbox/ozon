<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesDeleteResponseErrors implements OzonDtoInterface
{
    /**
     * @param list<CargoesV2CargoesDeleteResponseErrorsCargoErrorReasons> $cargoErrorReasons
     * @param list<CargoesV2CargoesDeleteResponseErrorsSupplyErrorReasonsEnum> $supplyErrorReasons
     * @param list<CargoesV2CargoesDeleteResponseErrorsTransportCargoErrorReasons> $transportCargoErrorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $cargoErrorReasons,
        public array $supplyErrorReasons,
        public array $transportCargoErrorReasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cargoErrorReasons: OzonDtoValue::objectList($payload['cargo_error_reasons'] ?? null, CargoesV2CargoesDeleteResponseErrorsCargoErrorReasons::class),
            supplyErrorReasons: OzonDtoValue::scalarObjectList($payload['supply_error_reasons'] ?? null, CargoesV2CargoesDeleteResponseErrorsSupplyErrorReasonsEnum::class),
            transportCargoErrorReasons: OzonDtoValue::objectList($payload['transport_cargo_error_reasons'] ?? null, CargoesV2CargoesDeleteResponseErrorsTransportCargoErrorReasons::class),
            extra: OzonDtoValue::extra($payload, ['cargo_error_reasons', 'supply_error_reasons', 'transport_cargo_error_reasons']),
        );
    }
}
