<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleTotalResponseOverpaymentItem implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsV1AnalyticsLocalSaleTotalResponseOverpaymentItemDeliverySchemaEnum> $deliverySchema
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $deliverySchema,
        public ?string $image,
        public ?string $name,
        public ?string $offerId,
        public ?int $sku,
        public ?float $totalOverpayment,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliverySchema: OzonDtoValue::scalarObjectList($payload['delivery_schema'] ?? null, AnalyticsV1AnalyticsLocalSaleTotalResponseOverpaymentItemDeliverySchemaEnum::class),
            image: OzonDtoValue::string($payload['image'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            totalOverpayment: OzonDtoValue::float($payload['total_overpayment'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_schema', 'image', 'name', 'offer_id', 'sku', 'total_overpayment']),
        );
    }
}
