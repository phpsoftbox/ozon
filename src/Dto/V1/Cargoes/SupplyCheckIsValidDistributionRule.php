<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyCheckIsValidDistributionRule implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $countDistributedSku,
        public ?int $countSkuTotal,
        public ?bool $isApplicable,
        public ?int $percentsInt,
        public ?bool $satisfied,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            countDistributedSku: OzonDtoValue::int($payload['count_distributed_sku'] ?? null),
            countSkuTotal: OzonDtoValue::int($payload['count_sku_total'] ?? null),
            isApplicable: OzonDtoValue::bool($payload['is_applicable'] ?? null),
            percentsInt: OzonDtoValue::int($payload['percents_int'] ?? null),
            satisfied: OzonDtoValue::bool($payload['satisfied'] ?? null),
            extra: OzonDtoValue::extra($payload, ['count_distributed_sku', 'count_sku_total', 'is_applicable', 'percents_int', 'satisfied']),
        );
    }
}
