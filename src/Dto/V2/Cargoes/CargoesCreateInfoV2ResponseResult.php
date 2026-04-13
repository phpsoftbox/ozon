<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesCreateInfoV2ResponseResult implements OzonDtoInterface
{
    /**
     * @param list<ResultCargo> $cargoes
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
            cargoes: OzonDtoValue::objectList($payload['cargoes'] ?? null, ResultCargo::class),
            extra: OzonDtoValue::extra($payload, ['cargoes']),
        );
    }
}
