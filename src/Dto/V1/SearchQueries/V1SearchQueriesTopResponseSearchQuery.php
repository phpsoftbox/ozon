<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SearchQueries;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SearchQueriesTopResponseSearchQuery implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $addToCart,
        public ?float $avgPrice,
        public ?float $clientCount,
        public ?float $conversionToCart,
        public ?float $itemsViews,
        public ?string $query,
        public ?float $sellersCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            addToCart: OzonDtoValue::float($payload['add_to_cart'] ?? null),
            avgPrice: OzonDtoValue::float($payload['avg_price'] ?? null),
            clientCount: OzonDtoValue::float($payload['client_count'] ?? null),
            conversionToCart: OzonDtoValue::float($payload['conversion_to_cart'] ?? null),
            itemsViews: OzonDtoValue::float($payload['items_views'] ?? null),
            query: OzonDtoValue::string($payload['query'] ?? null),
            sellersCount: OzonDtoValue::float($payload['sellers_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['add_to_cart', 'avg_price', 'client_count', 'conversion_to_cart', 'items_views', 'query', 'sellers_count']),
        );
    }
}
