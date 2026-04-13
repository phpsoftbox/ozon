<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesSuppliesGetResponseSuppliesCargoesTransportCargoes implements OzonDtoInterface
{
    /**
     * @param list<CargoesV1CargoesSuppliesGetResponseSuppliesCargoesTransportCargoesCargoes> $cargoes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $bundleId,
        public array $cargoes,
        public ?int $transportCargoId,
        public ?CargoesV1CargoesSuppliesGetResponseSuppliesCargoesTransportCargoesTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            cargoes: OzonDtoValue::objectList($payload['cargoes'] ?? null, CargoesV1CargoesSuppliesGetResponseSuppliesCargoesTransportCargoesCargoes::class),
            transportCargoId: OzonDtoValue::int($payload['transport_cargo_id'] ?? null),
            type: OzonDtoValue::scalarObject($payload['type'] ?? null, CargoesV1CargoesSuppliesGetResponseSuppliesCargoesTransportCargoesTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['bundle_id', 'cargoes', 'transport_cargo_id', 'type']),
        );
    }
}
