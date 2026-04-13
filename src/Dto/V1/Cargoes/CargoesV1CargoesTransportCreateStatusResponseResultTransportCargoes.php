<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesTransportCreateStatusResponseResultTransportCargoes implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?CargoesV1CargoesTransportCreateStatusResponseResultTransportCargoesTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            type: OzonDtoValue::scalarObject($payload['type'] ?? null, CargoesV1CargoesTransportCreateStatusResponseResultTransportCargoesTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['id', 'type']),
        );
    }
}
