<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpArchiveGetResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $actFileUuid,
        public ?string $bundleId,
        public ?V1ArchiveSkuSummary $bundleSkuSummary,
        public ?int $businessFlowTypeId,
        public ?string $createdDate,
        public ?V1ArchiveDeclineReason $declineReason,
        public ?Fbpv1DeliveryDetails $deliveryDetails,
        public ?bool $hasAct,
        public ?bool $hasLabel,
        public ?int $id,
        public ?int $orderDraftId,
        public ?string $orderNumber,
        public ?int $packageUnitsCount,
        public ?string $receiveDate,
        public ?int $rowVersion,
        public ?V1ArchiveStatusEnum $status,
        public ?string $supplyId,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actFileUuid: OzonDtoValue::string($payload['act_file_uuid'] ?? null),
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            bundleSkuSummary: OzonDtoValue::object($payload['bundle_sku_summary'] ?? null, V1ArchiveSkuSummary::class),
            businessFlowTypeId: OzonDtoValue::int($payload['business_flow_type_id'] ?? null),
            createdDate: OzonDtoValue::string($payload['created_date'] ?? null),
            declineReason: OzonDtoValue::object($payload['decline_reason'] ?? null, V1ArchiveDeclineReason::class),
            deliveryDetails: OzonDtoValue::object($payload['delivery_details'] ?? null, Fbpv1DeliveryDetails::class),
            hasAct: OzonDtoValue::bool($payload['has_act'] ?? null),
            hasLabel: OzonDtoValue::bool($payload['has_label'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            orderDraftId: OzonDtoValue::int($payload['order_draft_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            packageUnitsCount: OzonDtoValue::int($payload['package_units_count'] ?? null),
            receiveDate: OzonDtoValue::string($payload['receive_date'] ?? null),
            rowVersion: OzonDtoValue::int($payload['row_version'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, V1ArchiveStatusEnum::class),
            supplyId: OzonDtoValue::string($payload['supply_id'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['act_file_uuid', 'bundle_id', 'bundle_sku_summary', 'business_flow_type_id', 'created_date', 'decline_reason', 'delivery_details', 'has_act', 'has_label', 'id', 'order_draft_id', 'order_number', 'package_units_count', 'receive_date', 'row_version', 'status', 'supply_id', 'warehouse_id']),
        );
    }
}
