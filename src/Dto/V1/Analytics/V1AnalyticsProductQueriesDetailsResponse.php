<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AnalyticsProductQueriesDetailsResponse implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsProductQueriesDetailsResponseQuery> $queries
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1AnalyticsProductQueriesDetailsResponseAnalyticsPeriod $analyticsPeriod,
        public ?int $pageCount,
        public array $queries,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            analyticsPeriod: OzonDtoValue::object($payload['analytics_period'] ?? null, V1AnalyticsProductQueriesDetailsResponseAnalyticsPeriod::class),
            pageCount: OzonDtoValue::int($payload['page_count'] ?? null),
            queries: OzonDtoValue::objectList($payload['queries'] ?? null, AnalyticsProductQueriesDetailsResponseQuery::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['analytics_period', 'page_count', 'queries', 'total']),
        );
    }
}
