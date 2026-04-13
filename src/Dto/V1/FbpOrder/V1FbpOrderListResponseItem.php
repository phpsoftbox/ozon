<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;
use PhpSoftBox\Ozon\Dto\V1\FbpArchive\Fbpv1DeliveryDetails;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1CancellationState;

final readonly class V1FbpOrderListResponseItem implements OzonDtoInterface
{
    /**
     * @param list<V1OrderAttentionTypeEnum> $attentionReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $attentionReasons,
        public ?ItemBundleSummary $bundleSummary,
        public ?bool $canBeCancelled,
        public ?V1CancellationState $cancellationState,
        public ?string $createdDate,
        public ?Fbpv1DeliveryDetails $deliveryDetails,
        public ?bool $hasConsignmentNote,
        public ?bool $hasLabel,
        public ?int $id,
        public ?bool $locked,
        public ?string $orderNumber,
        public ?int $packageUnitsCount,
        public ?string $receiveDate,
        public ?V1OrderStatusEnum $status,
        public ?string $supplyId,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            attentionReasons: OzonDtoValue::objectList($payload['attention_reasons'] ?? null, V1OrderAttentionTypeEnum::class),
            bundleSummary: OzonDtoValue::object($payload['bundle_summary'] ?? null, ItemBundleSummary::class),
            canBeCancelled: OzonDtoValue::bool($payload['can_be_cancelled'] ?? null),
            cancellationState: OzonDtoValue::object($payload['cancellation_state'] ?? null, V1CancellationState::class),
            createdDate: OzonDtoValue::string($payload['created_date'] ?? null),
            deliveryDetails: OzonDtoValue::object($payload['delivery_details'] ?? null, Fbpv1DeliveryDetails::class),
            hasConsignmentNote: OzonDtoValue::bool($payload['has_consignment_note'] ?? null),
            hasLabel: OzonDtoValue::bool($payload['has_label'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            locked: OzonDtoValue::bool($payload['locked'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            packageUnitsCount: OzonDtoValue::int($payload['package_units_count'] ?? null),
            receiveDate: OzonDtoValue::string($payload['receive_date'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, V1OrderStatusEnum::class),
            supplyId: OzonDtoValue::string($payload['supply_id'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['attention_reasons', 'bundle_summary', 'can_be_cancelled', 'cancellation_state', 'created_date', 'delivery_details', 'has_consignment_note', 'has_label', 'id', 'locked', 'order_number', 'package_units_count', 'receive_date', 'status', 'supply_id', 'warehouse_id']),
        );
    }
}
