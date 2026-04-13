<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesGetResponseSupply implements OzonDtoInterface
{
    /**
     * @param list<SupplyCargoInfo> $cargoes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $bundleId,
        public array $cargoes,
        public ?int $supplyId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            cargoes: OzonDtoValue::objectList($payload['cargoes'] ?? null, SupplyCargoInfo::class),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['bundle_id', 'cargoes', 'supply_id']),
        );
    }
}
