<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetrics implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsOverpaymentReason> $overpaymentReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsAttentionLevelEnum $attentionLevel,
        public ?float $impactShare,
        public ?AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsLocalData $localData,
        public ?AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsOverpayment $overpayment,
        public array $overpaymentReasons,
        public ?float $price,
        public ?int $recommendedSupply,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            attentionLevel: OzonDtoValue::scalarObject($payload['attention_level'] ?? null, AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsAttentionLevelEnum::class),
            impactShare: OzonDtoValue::float($payload['impact_share'] ?? null),
            localData: OzonDtoValue::object($payload['local_data'] ?? null, AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsLocalData::class),
            overpayment: OzonDtoValue::object($payload['overpayment'] ?? null, AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsOverpayment::class),
            overpaymentReasons: OzonDtoValue::objectList($payload['overpayment_reasons'] ?? null, AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsOverpaymentReason::class),
            price: OzonDtoValue::float($payload['price'] ?? null),
            recommendedSupply: OzonDtoValue::int($payload['recommended_supply'] ?? null),
            extra: OzonDtoValue::extra($payload, ['attention_level', 'impact_share', 'local_data', 'overpayment', 'overpayment_reasons', 'price', 'recommended_supply']),
        );
    }
}
