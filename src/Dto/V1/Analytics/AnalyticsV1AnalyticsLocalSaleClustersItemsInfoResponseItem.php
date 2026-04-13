<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $clusterToId,
        public ?AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemItemInfo $item,
        public ?AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetrics $metrics,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clusterToId: OzonDtoValue::int($payload['cluster_to_id'] ?? null),
            item: OzonDtoValue::object($payload['item'] ?? null, AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemItemInfo::class),
            metrics: OzonDtoValue::object($payload['metrics'] ?? null, AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetrics::class),
            extra: OzonDtoValue::extra($payload, ['cluster_to_id', 'item', 'metrics']),
        );
    }
}
