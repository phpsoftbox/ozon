<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeDetailsResponseData implements OzonDtoInterface
{
    /**
     * @param list<V1AverageDeliveryTimeDetailsResponseClustersData> $clustersData
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $clustersData,
        public ?AverageDeliveryTimeDetailsResponseItemData $item,
        public ?V1AverageDeliveryTimeDetailsResponseMetrics $metrics,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clustersData: OzonDtoValue::objectList($payload['clusters_data'] ?? null, V1AverageDeliveryTimeDetailsResponseClustersData::class),
            item: OzonDtoValue::object($payload['item'] ?? null, AverageDeliveryTimeDetailsResponseItemData::class),
            metrics: OzonDtoValue::object($payload['metrics'] ?? null, V1AverageDeliveryTimeDetailsResponseMetrics::class),
            extra: OzonDtoValue::extra($payload, ['clusters_data', 'item', 'metrics']),
        );
    }
}
