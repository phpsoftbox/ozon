<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeDetailsResponseClustersDataAmnesty implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $deliveryTime,
        public ?V1AverageDeliveryTimeDetailsResponseDeliveryTimeStatus $deliveryTimeStatus,
        public ?int $ordersCount,
        public ?int $ordersPercent,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliveryTime: OzonDtoValue::int($payload['delivery_time'] ?? null),
            deliveryTimeStatus: OzonDtoValue::object($payload['delivery_time_status'] ?? null, V1AverageDeliveryTimeDetailsResponseDeliveryTimeStatus::class),
            ordersCount: OzonDtoValue::int($payload['orders_count'] ?? null),
            ordersPercent: OzonDtoValue::int($payload['orders_percent'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_time', 'delivery_time_status', 'orders_count', 'orders_percent']),
        );
    }
}
