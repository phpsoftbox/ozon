<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV3PostingFboListResponsePostingsAnalyticsData implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $city,
        public ?string $clientDeliveryDateBegin,
        public ?string $clientDeliveryDateEnd,
        public ?string $deliveryType,
        public ?bool $isLegal,
        public ?bool $isPremium,
        public ?string $paymentTypeGroupName,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            city: OzonDtoValue::string($payload['city'] ?? null),
            clientDeliveryDateBegin: OzonDtoValue::string($payload['client_delivery_date_begin'] ?? null),
            clientDeliveryDateEnd: OzonDtoValue::string($payload['client_delivery_date_end'] ?? null),
            deliveryType: OzonDtoValue::string($payload['delivery_type'] ?? null),
            isLegal: OzonDtoValue::bool($payload['is_legal'] ?? null),
            isPremium: OzonDtoValue::bool($payload['is_premium'] ?? null),
            paymentTypeGroupName: OzonDtoValue::string($payload['payment_type_group_name'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['city', 'client_delivery_date_begin', 'client_delivery_date_end', 'delivery_type', 'is_legal', 'is_premium', 'payment_type_group_name', 'warehouse_id', 'warehouse_name']),
        );
    }
}
