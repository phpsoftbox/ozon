<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsCategoryComparisonResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $id,
        public ?string $label,
        public ?int $maxRating,
        public ?float $metricAiv,
        public ?float $metricAivGrowth,
        public ?int $metricBrands,
        public ?float $metricBuyout,
        public ?float $metricCategoryShare,
        public ?int $metricClusters,
        public ?float $metricGmv,
        public ?float $metricGmvGrowth,
        public ?int $metricItems,
        public ?float $metricLeaderShare,
        public ?int $metricSellers,
        public ?int $rating,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::string($payload['id'] ?? null),
            label: OzonDtoValue::string($payload['label'] ?? null),
            maxRating: OzonDtoValue::int($payload['max_rating'] ?? null),
            metricAiv: OzonDtoValue::float($payload['metric_aiv'] ?? null),
            metricAivGrowth: OzonDtoValue::float($payload['metric_aiv_growth'] ?? null),
            metricBrands: OzonDtoValue::int($payload['metric_brands'] ?? null),
            metricBuyout: OzonDtoValue::float($payload['metric_buyout'] ?? null),
            metricCategoryShare: OzonDtoValue::float($payload['metric_category_share'] ?? null),
            metricClusters: OzonDtoValue::int($payload['metric_clusters'] ?? null),
            metricGmv: OzonDtoValue::float($payload['metric_gmv'] ?? null),
            metricGmvGrowth: OzonDtoValue::float($payload['metric_gmv_growth'] ?? null),
            metricItems: OzonDtoValue::int($payload['metric_items'] ?? null),
            metricLeaderShare: OzonDtoValue::float($payload['metric_leader_share'] ?? null),
            metricSellers: OzonDtoValue::int($payload['metric_sellers'] ?? null),
            rating: OzonDtoValue::int($payload['rating'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'label', 'max_rating', 'metric_aiv', 'metric_aiv_growth', 'metric_brands', 'metric_buyout', 'metric_category_share', 'metric_clusters', 'metric_gmv', 'metric_gmv_growth', 'metric_items', 'metric_leader_share', 'metric_sellers', 'rating']),
        );
    }
}
