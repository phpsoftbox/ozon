<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeResponseMetrics implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?AttentionLevelEnum $attentionLevel,
        public ?int $averageDeliveryTime,
        public ?V1AverageDeliveryTimeResponseDeliveryTimeStatus $averageDeliveryTimeStatus,
        public ?int $impactShare,
        public ?string $exactImpactShare,
        public ?int $lostProfit,
        public ?V1AverageDeliveryTimeResponseMetricsOrdersCount $ordersCount,
        public ?int $recommendedSupply,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            attentionLevel: OzonDtoValue::object($payload['attention_level'] ?? null, AttentionLevelEnum::class),
            averageDeliveryTime: OzonDtoValue::int($payload['average_delivery_time'] ?? null),
            averageDeliveryTimeStatus: OzonDtoValue::object($payload['average_delivery_time_status'] ?? null, V1AverageDeliveryTimeResponseDeliveryTimeStatus::class),
            impactShare: OzonDtoValue::int($payload['impact_share'] ?? null),
            exactImpactShare: OzonDtoValue::string($payload['exact_impact_share'] ?? null),
            lostProfit: OzonDtoValue::int($payload['lost_profit'] ?? null),
            ordersCount: OzonDtoValue::object($payload['orders_count'] ?? null, V1AverageDeliveryTimeResponseMetricsOrdersCount::class),
            recommendedSupply: OzonDtoValue::int($payload['recommended_supply'] ?? null),
            extra: OzonDtoValue::extra($payload, ['attention_level', 'average_delivery_time', 'average_delivery_time_status', 'impact_share', 'exact_impact_share', 'lost_profit', 'orders_count', 'recommended_supply']),
        );
    }
}
