<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1GetFbpPostingResponsePostingAnalyticsData implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $city,
        public ?string $deliveryDateBegin,
        public ?string $deliveryDateEnd,
        public ?string $deliveryType,
        public ?string $region,
        public ?int $warehouseId,
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
            region: OzonDtoValue::string($payload['region'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['city', 'delivery_date_begin', 'delivery_date_end', 'delivery_type', 'region', 'warehouse_id']),
        );
    }
}
