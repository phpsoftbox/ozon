<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AnalyticsProductQueriesResponse implements OzonDtoInterface
{
    /**
     * @param list<V1AnalyticsProductQueriesResponseItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?AnalyticsProductQueriesResponseAnalyticsPeriod $analyticsPeriod,
        public array $items,
        public ?int $pageCount,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            analyticsPeriod: OzonDtoValue::object($payload['analytics_period'] ?? null, AnalyticsProductQueriesResponseAnalyticsPeriod::class),
            items: OzonDtoValue::objectList($payload['items'] ?? null, V1AnalyticsProductQueriesResponseItem::class),
            pageCount: OzonDtoValue::int($payload['page_count'] ?? null),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['analytics_period', 'items', 'page_count', 'total']),
        );
    }
}
