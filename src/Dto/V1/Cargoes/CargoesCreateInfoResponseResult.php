<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesCreateInfoResponseResult implements OzonDtoInterface
{
    /**
     * @param list<CargoesCreateInfoResponseResultCargo> $cargoes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $cargoes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cargoes: OzonDtoValue::objectList($payload['cargoes'] ?? null, CargoesCreateInfoResponseResultCargo::class),
            extra: OzonDtoValue::extra($payload, ['cargoes']),
        );
    }
}
