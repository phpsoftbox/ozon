<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesTransportBindStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<CargoesV1CargoesTransportBindStatusResponseErrorReasonsEnum> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public ?CargoesV1CargoesTransportBindStatusResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::scalarObjectList($payload['error_reasons'] ?? null, CargoesV1CargoesTransportBindStatusResponseErrorReasonsEnum::class),
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, CargoesV1CargoesTransportBindStatusResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'status']),
        );
    }
}
