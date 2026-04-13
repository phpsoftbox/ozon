<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesLabelTransportByOrderStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<CargoesV1CargoesLabelTransportByOrderStatusResponseErrorReasonsEnum> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public ?CargoesV1CargoesLabelTransportByOrderStatusResponseResult $result,
        public ?CargoesV1CargoesLabelTransportByOrderStatusResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::scalarObjectList($payload['error_reasons'] ?? null, CargoesV1CargoesLabelTransportByOrderStatusResponseErrorReasonsEnum::class),
            result: OzonDtoValue::object($payload['result'] ?? null, CargoesV1CargoesLabelTransportByOrderStatusResponseResult::class),
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, CargoesV1CargoesLabelTransportByOrderStatusResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'result', 'status']),
        );
    }
}
