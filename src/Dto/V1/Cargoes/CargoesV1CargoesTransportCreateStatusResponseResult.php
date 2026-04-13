<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesTransportCreateStatusResponseResult implements OzonDtoInterface
{
    /**
     * @param list<CargoesV1CargoesTransportCreateStatusResponseResultTransportCargoes> $transportCargoes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $transportCargoes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            transportCargoes: OzonDtoValue::objectList($payload['transport_cargoes'] ?? null, CargoesV1CargoesTransportCreateStatusResponseResultTransportCargoes::class),
            extra: OzonDtoValue::extra($payload, ['transport_cargoes']),
        );
    }
}
