<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyCheckPackageUnitWithDistributionRule implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $countAll,
        public ?int $countWithDistribution,
        public ?bool $isApplicable,
        public ?bool $isRequired,
        public ?bool $satisfied,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            countAll: OzonDtoValue::int($payload['count_all'] ?? null),
            countWithDistribution: OzonDtoValue::int($payload['count_with_distribution'] ?? null),
            isApplicable: OzonDtoValue::bool($payload['is_applicable'] ?? null),
            isRequired: OzonDtoValue::bool($payload['is_required'] ?? null),
            satisfied: OzonDtoValue::bool($payload['satisfied'] ?? null),
            extra: OzonDtoValue::extra($payload, ['count_all', 'count_with_distribution', 'is_applicable', 'is_required', 'satisfied']),
        );
    }
}
