<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyCheckPlacementZoneRule implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $countCargoesAll,
        public ?int $countCargoesWithMonoPlacementZone,
        public ?bool $isApplicable,
        public ?bool $satisfied,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            countCargoesAll: OzonDtoValue::int($payload['count_cargoes_all'] ?? null),
            countCargoesWithMonoPlacementZone: OzonDtoValue::int($payload['count_cargoes_with_mono_placement_zone'] ?? null),
            isApplicable: OzonDtoValue::bool($payload['is_applicable'] ?? null),
            satisfied: OzonDtoValue::bool($payload['satisfied'] ?? null),
            extra: OzonDtoValue::extra($payload, ['count_cargoes_all', 'count_cargoes_with_mono_placement_zone', 'is_applicable', 'satisfied']),
        );
    }
}
