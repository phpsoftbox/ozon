<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesSuppliesGetResponseSuppliesCargoes implements OzonDtoInterface
{
    /**
     * @param list<CargoesV1CargoesSuppliesGetResponseSuppliesCargoesCargoesWithoutTransportCargoes> $cargoesWithoutTransportCargoes
     * @param list<CargoesV1CargoesSuppliesGetResponseSuppliesCargoesTransportCargoes> $transportCargoes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $bundleId,
        public array $cargoesWithoutTransportCargoes,
        public ?int $supplyId,
        public array $transportCargoes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            cargoesWithoutTransportCargoes: OzonDtoValue::objectList($payload['cargoes_without_transport_cargoes'] ?? null, CargoesV1CargoesSuppliesGetResponseSuppliesCargoesCargoesWithoutTransportCargoes::class),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            transportCargoes: OzonDtoValue::objectList($payload['transport_cargoes'] ?? null, CargoesV1CargoesSuppliesGetResponseSuppliesCargoesTransportCargoes::class),
            extra: OzonDtoValue::extra($payload, ['bundle_id', 'cargoes_without_transport_cargoes', 'supply_id', 'transport_cargoes']),
        );
    }
}
