<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FbsPostingAnalyticsData implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $city,
        public ?string $deliveryDateBegin,
        public ?string $deliveryDateEnd,
        public ?string $deliveryType,
        public ?bool $isLegal,
        public ?bool $isPremium,
        public ?string $paymentTypeGroupName,
        public ?string $region,
        public ?string $tplProvider,
        public ?int $tplProviderId,
        public ?string $warehouse,
        public ?int $warehouseId,
        public ?string $clientDeliveryDateBegin,
        public ?string $clientDeliveryDateEnd,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            city: OzonDtoValue::string($payload['city'] ?? null),
            deliveryDateBegin: OzonDtoValue::string($payload['delivery_date_begin'] ?? null),
            deliveryDateEnd: OzonDtoValue::string($payload['delivery_date_end'] ?? null),
            deliveryType: OzonDtoValue::string($payload['delivery_type'] ?? null),
            isLegal: OzonDtoValue::bool($payload['is_legal'] ?? null),
            isPremium: OzonDtoValue::bool($payload['is_premium'] ?? null),
            paymentTypeGroupName: OzonDtoValue::string($payload['payment_type_group_name'] ?? null),
            region: OzonDtoValue::string($payload['region'] ?? null),
            tplProvider: OzonDtoValue::string($payload['tpl_provider'] ?? null),
            tplProviderId: OzonDtoValue::int($payload['tpl_provider_id'] ?? null),
            warehouse: OzonDtoValue::string($payload['warehouse'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            clientDeliveryDateBegin: OzonDtoValue::string($payload['client_delivery_date_begin'] ?? null),
            clientDeliveryDateEnd: OzonDtoValue::string($payload['client_delivery_date_end'] ?? null),
            extra: OzonDtoValue::extra($payload, ['city', 'delivery_date_begin', 'delivery_date_end', 'delivery_type', 'is_legal', 'is_premium', 'payment_type_group_name', 'region', 'tpl_provider', 'tpl_provider_id', 'warehouse', 'warehouse_id', 'client_delivery_date_begin', 'client_delivery_date_end']),
        );
    }
}
