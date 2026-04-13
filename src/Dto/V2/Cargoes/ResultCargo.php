<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ResultCargo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $key,
        public ?CargoValue $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            key: OzonDtoValue::string($payload['key'] ?? null),
            value: OzonDtoValue::object($payload['value'] ?? null, CargoValue::class),
            extra: OzonDtoValue::extra($payload, ['key', 'value']),
        );
    }
}
