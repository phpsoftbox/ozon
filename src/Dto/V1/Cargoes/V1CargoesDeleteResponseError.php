<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesDeleteResponseError implements OzonDtoInterface
{
    /**
     * @param list<V1CargoesDeleteResponseErrorCargoErrorReason> $cargoErrorReasons
     * @param list<V1CargoesDeleteResponseErrorSupplyErrorReasonEnum> $supplyErrorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $cargoErrorReasons,
        public array $supplyErrorReasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cargoErrorReasons: OzonDtoValue::objectList($payload['cargo_error_reasons'] ?? null, V1CargoesDeleteResponseErrorCargoErrorReason::class),
            supplyErrorReasons: OzonDtoValue::objectList($payload['supply_error_reasons'] ?? null, V1CargoesDeleteResponseErrorSupplyErrorReasonEnum::class),
            extra: OzonDtoValue::extra($payload, ['cargo_error_reasons', 'supply_error_reasons']),
        );
    }
}
