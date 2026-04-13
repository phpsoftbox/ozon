<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesDeleteStatusResponseErrorsTransportCargoErrorReasons implements OzonDtoInterface
{
    /**
     * @param list<CargoesV2CargoesDeleteStatusResponseErrorsTransportCargoErrorReasonsErrorReasonsEnum> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public ?int $transportCargoId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::scalarObjectList($payload['error_reasons'] ?? null, CargoesV2CargoesDeleteStatusResponseErrorsTransportCargoErrorReasonsErrorReasonsEnum::class),
            transportCargoId: OzonDtoValue::int($payload['transport_cargo_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'transport_cargo_id']),
        );
    }
}
