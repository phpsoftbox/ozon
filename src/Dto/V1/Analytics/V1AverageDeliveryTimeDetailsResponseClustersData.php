<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeDetailsResponseClustersData implements OzonDtoInterface
{
    /**
     * @param list<V1AverageDeliveryTimeDetailsResponseClustersDataAmnesty> $anotherDeliveryTime
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $anotherDeliveryTime,
        public ?int $clusterId,
        public ?int $deliveryTimeFBO,
        public ?float $deliveryTimeFBS,
        public ?V1AverageDeliveryTimeDetailsResponseDeliveryTimeStatus $deliveryTimeStatus,
        public ?int $ordersCount,
        public ?int $ordersPercent,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            anotherDeliveryTime: OzonDtoValue::objectList($payload['another_delivery_time'] ?? null, V1AverageDeliveryTimeDetailsResponseClustersDataAmnesty::class),
            clusterId: OzonDtoValue::int($payload['cluster_id'] ?? null),
            deliveryTimeFBO: OzonDtoValue::int($payload['delivery_time_FBO'] ?? null),
            deliveryTimeFBS: OzonDtoValue::float($payload['delivery_time_FBS'] ?? null),
            deliveryTimeStatus: OzonDtoValue::object($payload['delivery_time_status'] ?? null, V1AverageDeliveryTimeDetailsResponseDeliveryTimeStatus::class),
            ordersCount: OzonDtoValue::int($payload['orders_count'] ?? null),
            ordersPercent: OzonDtoValue::int($payload['orders_percent'] ?? null),
            extra: OzonDtoValue::extra($payload, ['another_delivery_time', 'cluster_id', 'delivery_time_FBO', 'delivery_time_FBS', 'delivery_time_status', 'orders_count', 'orders_percent']),
        );
    }
}
