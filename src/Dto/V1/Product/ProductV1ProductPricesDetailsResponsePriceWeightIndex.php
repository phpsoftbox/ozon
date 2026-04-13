<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1ProductPricesDetailsResponsePriceWeightIndex implements OzonDtoInterface
{
    /**
     * @param list<MoneyMoney2> $selfWbMinCompetitorPrice
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $selfWbIndex,
        public array $selfWbMinCompetitorPrice,
        public ?string $selfWbUrl,
        public ?float $weightPercent,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            selfWbIndex: OzonDtoValue::float($payload['self_wb_index'] ?? null),
            selfWbMinCompetitorPrice: OzonDtoValue::objectList($payload['self_wb_min_competitor_price'] ?? null, MoneyMoney2::class),
            selfWbUrl: OzonDtoValue::string($payload['self_wb_url'] ?? null),
            weightPercent: OzonDtoValue::float($payload['weight_percent'] ?? null),
            extra: OzonDtoValue::extra($payload, ['self_wb_index', 'self_wb_min_competitor_price', 'self_wb_url', 'weight_percent']),
        );
    }
}
