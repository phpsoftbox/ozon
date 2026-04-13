<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesGetResponseSupplies implements OzonDtoInterface
{
    /**
     * @param list<CargoesV2CargoesGetResponseSuppliesCargoes> $cargoes
     * @param list<CargoesV2CargoesGetResponseSuppliesTransportCargoes> $transportCargoes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $bundleId,
        public array $cargoes,
        public ?string $cargoesBundleId,
        public ?CargoesV2CargoesGetResponseSuppliesLimits $limits,
        public ?int $supplyId,
        public array $transportCargoes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            cargoes: OzonDtoValue::objectList($payload['cargoes'] ?? null, CargoesV2CargoesGetResponseSuppliesCargoes::class),
            cargoesBundleId: OzonDtoValue::string($payload['cargoes_bundle_id'] ?? null),
            limits: OzonDtoValue::object($payload['limits'] ?? null, CargoesV2CargoesGetResponseSuppliesLimits::class),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            transportCargoes: OzonDtoValue::objectList($payload['transport_cargoes'] ?? null, CargoesV2CargoesGetResponseSuppliesTransportCargoes::class),
            extra: OzonDtoValue::extra($payload, ['bundle_id', 'cargoes', 'cargoes_bundle_id', 'limits', 'supply_id', 'transport_cargoes']),
        );
    }
}
