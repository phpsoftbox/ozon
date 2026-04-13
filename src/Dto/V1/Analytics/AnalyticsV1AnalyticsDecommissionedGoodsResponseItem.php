<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsDecommissionedGoodsResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $compensationPrice,
        public ?AnalyticsV1AnalyticsDecommissionedGoodsResponseItemCompensationEnum $compensationType,
        public ?string $date,
        public ?AnalyticsV1AnalyticsDecommissionedGoodsResponseItemDeliverySchemaEnum $deliverySchema,
        public ?float $disposalFee,
        public ?AnalyticsV1AnalyticsDecommissionedGoodsResponseItemDisposeReasonEnum $disposeReason,
        public ?string $postingNumber,
        public ?int $quantity,
        public ?int $sku,
        public ?int $supplyId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            compensationPrice: OzonDtoValue::float($payload['compensation_price'] ?? null),
            compensationType: OzonDtoValue::scalarObject($payload['compensation_type'] ?? null, AnalyticsV1AnalyticsDecommissionedGoodsResponseItemCompensationEnum::class),
            date: OzonDtoValue::string($payload['date'] ?? null),
            deliverySchema: OzonDtoValue::scalarObject($payload['delivery_schema'] ?? null, AnalyticsV1AnalyticsDecommissionedGoodsResponseItemDeliverySchemaEnum::class),
            disposalFee: OzonDtoValue::float($payload['disposal_fee'] ?? null),
            disposeReason: OzonDtoValue::scalarObject($payload['dispose_reason'] ?? null, AnalyticsV1AnalyticsDecommissionedGoodsResponseItemDisposeReasonEnum::class),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['compensation_price', 'compensation_type', 'date', 'delivery_schema', 'disposal_fee', 'dispose_reason', 'posting_number', 'quantity', 'sku', 'supply_id']),
        );
    }
}
