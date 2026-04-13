<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetrics implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsOverpaymentReasonInfo> $overpaymentReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsAttentionLevelEnum $attentionLevel,
        public ?float $impactShare,
        public ?AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsLocalData $localData,
        public ?AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsOverpayment $overpayment,
        public array $overpaymentReasons,
        public ?float $price,
        public ?int $recommendedSupply,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            attentionLevel: OzonDtoValue::scalarObject($payload['attention_level'] ?? null, AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsAttentionLevelEnum::class),
            impactShare: OzonDtoValue::float($payload['impact_share'] ?? null),
            localData: OzonDtoValue::object($payload['local_data'] ?? null, AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsLocalData::class),
            overpayment: OzonDtoValue::object($payload['overpayment'] ?? null, AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsOverpayment::class),
            overpaymentReasons: OzonDtoValue::objectList($payload['overpayment_reasons'] ?? null, AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsOverpaymentReasonInfo::class),
            price: OzonDtoValue::float($payload['price'] ?? null),
            recommendedSupply: OzonDtoValue::int($payload['recommended_supply'] ?? null),
            extra: OzonDtoValue::extra($payload, ['attention_level', 'impact_share', 'local_data', 'overpayment', 'overpayment_reasons', 'price', 'recommended_supply']),
        );
    }
}
