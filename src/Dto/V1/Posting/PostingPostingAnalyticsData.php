<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingPostingAnalyticsData implements OzonDtoInterface
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
        public ?string $region,
        public ?int $warehouseId,
        public ?string $warehouseName,
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
            region: OzonDtoValue::string($payload['region'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['city', 'delivery_type', 'is_legal', 'is_premium', 'payment_type_group_name', 'region', 'warehouse_id', 'warehouse_name']),
        );
    }
}
