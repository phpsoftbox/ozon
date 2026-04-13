<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesLabelTransportByOrderCreateResponse implements OzonDtoInterface
{
    /**
     * @param list<CargoesV1CargoesLabelTransportByOrderCreateResponseErrorReasonsEnum> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public ?string $operationId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::scalarObjectList($payload['error_reasons'] ?? null, CargoesV1CargoesLabelTransportByOrderCreateResponseErrorReasonsEnum::class),
            operationId: OzonDtoValue::string($payload['operation_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'operation_id']),
        );
    }
}
