<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsProductQueriesDetailsResponseQuery implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $currency,
        public ?float $gmv,
        public ?int $orderCount,
        public ?float $position,
        public ?string $query,
        public ?int $queryIndex,
        public ?int $sku,
        public ?int $uniqueSearchUsers,
        public ?int $uniqueViewUsers,
        public ?float $viewConversion,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            gmv: OzonDtoValue::float($payload['gmv'] ?? null),
            orderCount: OzonDtoValue::int($payload['order_count'] ?? null),
            position: OzonDtoValue::float($payload['position'] ?? null),
            query: OzonDtoValue::string($payload['query'] ?? null),
            queryIndex: OzonDtoValue::int($payload['query_index'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            uniqueSearchUsers: OzonDtoValue::int($payload['unique_search_users'] ?? null),
            uniqueViewUsers: OzonDtoValue::int($payload['unique_view_users'] ?? null),
            viewConversion: OzonDtoValue::float($payload['view_conversion'] ?? null),
            extra: OzonDtoValue::extra($payload, ['currency', 'gmv', 'order_count', 'position', 'query', 'query_index', 'sku', 'unique_search_users', 'unique_view_users', 'view_conversion']),
        );
    }
}
