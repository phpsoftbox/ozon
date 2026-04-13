<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesRulesGetResponse implements OzonDtoInterface
{
    /**
     * @param list<CargoesRulesGetResponseSupplyCheck> $supplyCheckLists
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $supplyCheckLists,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            supplyCheckLists: OzonDtoValue::objectList($payload['supply_check_lists'] ?? null, CargoesRulesGetResponseSupplyCheck::class),
            extra: OzonDtoValue::extra($payload, ['supply_check_lists']),
        );
    }
}
