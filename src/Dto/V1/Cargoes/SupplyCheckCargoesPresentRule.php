<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyCheckCargoesPresentRule implements OzonDtoInterface
{
    /**
     * @param list<CargoesPresentRuleCargoCountPerType> $cargoCountPerType
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $cargoCountPerType,
        public ?int $count,
        public ?bool $satisfied,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cargoCountPerType: OzonDtoValue::objectList($payload['cargo_count_per_type'] ?? null, CargoesPresentRuleCargoCountPerType::class),
            count: OzonDtoValue::int($payload['count'] ?? null),
            satisfied: OzonDtoValue::bool($payload['satisfied'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cargo_count_per_type', 'count', 'satisfied']),
        );
    }
}
