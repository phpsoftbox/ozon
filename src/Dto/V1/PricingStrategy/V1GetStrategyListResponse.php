<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetStrategyListResponse implements OzonDtoInterface
{
    /**
     * @param list<GetStrategyListResponseStrategy> $strategies
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $strategies,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            strategies: OzonDtoValue::objectList($payload['strategies'] ?? null, GetStrategyListResponseStrategy::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['strategies', 'total']),
        );
    }
}
