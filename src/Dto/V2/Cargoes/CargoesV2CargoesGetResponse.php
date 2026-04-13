<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesGetResponse implements OzonDtoInterface
{
    /**
     * @param list<CargoesV2CargoesGetResponseSupplies> $supplies
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $supplies,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            supplies: OzonDtoValue::objectList($payload['supplies'] ?? null, CargoesV2CargoesGetResponseSupplies::class),
            extra: OzonDtoValue::extra($payload, ['supplies']),
        );
    }
}
