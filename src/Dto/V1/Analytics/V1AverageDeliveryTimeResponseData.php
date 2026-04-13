<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeResponseData implements OzonDtoInterface
{
    /**
     * @param list<V1AverageDeliveryTimeResponseClustersData> $clustersData
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $clustersData,
        public ?int $deliveryClusterId,
        public ?V1AverageDeliveryTimeResponseMetrics $metrics,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clustersData: OzonDtoValue::objectList($payload['clusters_data'] ?? null, V1AverageDeliveryTimeResponseClustersData::class),
            deliveryClusterId: OzonDtoValue::int($payload['delivery_cluster_id'] ?? null),
            metrics: OzonDtoValue::object($payload['metrics'] ?? null, V1AverageDeliveryTimeResponseMetrics::class),
            extra: OzonDtoValue::extra($payload, ['clusters_data', 'delivery_cluster_id', 'metrics']),
        );
    }
}
