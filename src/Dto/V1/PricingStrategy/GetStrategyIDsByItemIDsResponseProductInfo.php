<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetStrategyIDsByItemIDsResponseProductInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $productId,
        public ?string $strategyId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            strategyId: OzonDtoValue::string($payload['strategy_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['product_id', 'strategy_id']),
        );
    }
}
