<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetStrategyItemInfoResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $strategyId,
        public ?bool $isEnabled,
        public ?int $strategyProductPrice,
        public ?string $priceDownloadedAt,
        public ?int $strategyCompetitorId,
        public ?string $strategyCompetitorProductUrl,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            strategyId: OzonDtoValue::string($payload['strategy_id'] ?? null),
            isEnabled: OzonDtoValue::bool($payload['is_enabled'] ?? null),
            strategyProductPrice: OzonDtoValue::int($payload['strategy_product_price'] ?? null),
            priceDownloadedAt: OzonDtoValue::string($payload['price_downloaded_at'] ?? null),
            strategyCompetitorId: OzonDtoValue::int($payload['strategy_competitor_id'] ?? null),
            strategyCompetitorProductUrl: OzonDtoValue::string($payload['strategy_competitor_product_url'] ?? null),
            extra: OzonDtoValue::extra($payload, ['strategy_id', 'is_enabled', 'strategy_product_price', 'price_downloaded_at', 'strategy_competitor_id', 'strategy_competitor_product_url']),
        );
    }
}
