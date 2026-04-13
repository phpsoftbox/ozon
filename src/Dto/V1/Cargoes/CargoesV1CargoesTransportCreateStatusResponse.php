<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesTransportCreateStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<CargoesV1CargoesTransportCreateStatusResponseErrorReasonsEnum> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public ?CargoesV1CargoesTransportCreateStatusResponseResult $result,
        public ?CargoesV1CargoesTransportCreateStatusResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::scalarObjectList($payload['error_reasons'] ?? null, CargoesV1CargoesTransportCreateStatusResponseErrorReasonsEnum::class),
            result: OzonDtoValue::object($payload['result'] ?? null, CargoesV1CargoesTransportCreateStatusResponseResult::class),
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, CargoesV1CargoesTransportCreateStatusResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'result', 'status']),
        );
    }
}
