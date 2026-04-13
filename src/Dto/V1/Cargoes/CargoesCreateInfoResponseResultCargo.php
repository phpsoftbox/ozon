<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesCreateInfoResponseResultCargo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $key,
        public ?CargoesCreateInfoResponseResultCargoValue $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            key: OzonDtoValue::string($payload['key'] ?? null),
            value: OzonDtoValue::object($payload['value'] ?? null, CargoesCreateInfoResponseResultCargoValue::class),
            extra: OzonDtoValue::extra($payload, ['key', 'value']),
        );
    }
}
