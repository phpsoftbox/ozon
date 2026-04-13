<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesSuppliesGetResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $notFoundSupplyIds
     * @param list<CargoesV1CargoesSuppliesGetResponseSuppliesCargoes> $suppliesCargoes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $notFoundSupplyIds,
        public array $suppliesCargoes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            notFoundSupplyIds: OzonDtoValue::array($payload['not_found_supply_ids'] ?? null),
            suppliesCargoes: OzonDtoValue::objectList($payload['supplies_cargoes'] ?? null, CargoesV1CargoesSuppliesGetResponseSuppliesCargoes::class),
            extra: OzonDtoValue::extra($payload, ['not_found_supply_ids', 'supplies_cargoes']),
        );
    }
}
