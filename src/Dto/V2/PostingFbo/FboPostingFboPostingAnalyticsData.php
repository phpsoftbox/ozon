<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FboPostingFboPostingAnalyticsData implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $city,
        public ?string $deliveryType,
        public ?bool $isLegal,
        public ?bool $isPremium,
        public ?string $paymentTypeGroupName,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public ?string $clientDeliveryDateBegin,
        public ?string $clientDeliveryDateEnd,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            city: OzonDtoValue::string($payload['city'] ?? null),
            deliveryType: OzonDtoValue::string($payload['delivery_type'] ?? null),
            isLegal: OzonDtoValue::bool($payload['is_legal'] ?? null),
            isPremium: OzonDtoValue::bool($payload['is_premium'] ?? null),
            paymentTypeGroupName: OzonDtoValue::string($payload['payment_type_group_name'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            clientDeliveryDateBegin: OzonDtoValue::string($payload['client_delivery_date_begin'] ?? null),
            clientDeliveryDateEnd: OzonDtoValue::string($payload['client_delivery_date_end'] ?? null),
            extra: OzonDtoValue::extra($payload, ['city', 'delivery_type', 'is_legal', 'is_premium', 'payment_type_group_name', 'warehouse_id', 'warehouse_name', 'client_delivery_date_begin', 'client_delivery_date_end']),
        );
    }
}
