<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryCheckoutResponseSplit implements OzonDtoInterface
{
    /**
     * @param list<DeliveryCheckoutResponseSplitItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DeliveryCheckoutResponseSplitDeliveryMethod $deliveryMethod,
        public ?DeliveryCheckoutResponseV2SplitDeliverySchemaEnum $deliverySchema,
        public array $items,
        public ?DeliveryCheckoutResponseUnavailableReasonEnum $unavailableReason,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliveryMethod: OzonDtoValue::object($payload['delivery_method'] ?? null, DeliveryCheckoutResponseSplitDeliveryMethod::class),
            deliverySchema: OzonDtoValue::object($payload['delivery_schema'] ?? null, DeliveryCheckoutResponseV2SplitDeliverySchemaEnum::class),
            items: OzonDtoValue::objectList($payload['items'] ?? null, DeliveryCheckoutResponseSplitItem::class),
            unavailableReason: OzonDtoValue::object($payload['unavailable_reason'] ?? null, DeliveryCheckoutResponseUnavailableReasonEnum::class),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_method', 'delivery_schema', 'items', 'unavailable_reason', 'warehouse_id']),
        );
    }
}
