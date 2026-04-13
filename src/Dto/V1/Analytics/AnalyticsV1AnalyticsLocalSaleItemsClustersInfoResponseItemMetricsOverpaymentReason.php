<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsOverpaymentReason implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $amount,
        public ?int $quantity,
        public ?AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsOverpaymentReasonReasonEnum $reason,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::float($payload['amount'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            reason: OzonDtoValue::scalarObject($payload['reason'] ?? null, AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItemMetricsOverpaymentReasonReasonEnum::class),
            extra: OzonDtoValue::extra($payload, ['amount', 'quantity', 'reason']),
        );
    }
}
