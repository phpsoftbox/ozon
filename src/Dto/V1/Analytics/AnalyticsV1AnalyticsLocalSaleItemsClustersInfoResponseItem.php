<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $macrolocalClusterToId,
        public ?AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetrics $metrics,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            macrolocalClusterToId: OzonDtoValue::int($payload['macrolocal_cluster_to_id'] ?? null),
            metrics: OzonDtoValue::object($payload['metrics'] ?? null, AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetrics::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['macrolocal_cluster_to_id', 'metrics', 'sku']),
        );
    }
}
