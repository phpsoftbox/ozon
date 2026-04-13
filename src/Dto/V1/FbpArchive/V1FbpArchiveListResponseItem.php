<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpArchiveListResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $actFileUuid,
        public ?string $bundleId,
        public ?V1ArchiveSkuSummary $bundleSkuSummary,
        public ?string $createdDate,
        public ?V1ArchiveDeclineReason $declineReason,
        public ?Fbpv1DeliveryDetails $deliveryDetails,
        public ?string $externalOrderId,
        public ?bool $hasAct,
        public ?bool $hasLabel,
        public ?int $orderDraftId,
        public ?int $packageUnitsCount,
        public ?string $receiveDate,
        public ?int $rowVersion,
        public ?V1ArchiveStatusEnum $status,
        public ?string $supplyId,
        public ?int $warehouseId,
        public ?int $whcOrderId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actFileUuid: OzonDtoValue::string($payload['act_file_uuid'] ?? null),
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            bundleSkuSummary: OzonDtoValue::object($payload['bundle_sku_summary'] ?? null, V1ArchiveSkuSummary::class),
            createdDate: OzonDtoValue::string($payload['created_date'] ?? null),
            declineReason: OzonDtoValue::object($payload['decline_reason'] ?? null, V1ArchiveDeclineReason::class),
            deliveryDetails: OzonDtoValue::object($payload['delivery_details'] ?? null, Fbpv1DeliveryDetails::class),
            externalOrderId: OzonDtoValue::string($payload['external_order_id'] ?? null),
            hasAct: OzonDtoValue::bool($payload['has_act'] ?? null),
            hasLabel: OzonDtoValue::bool($payload['has_label'] ?? null),
            orderDraftId: OzonDtoValue::int($payload['order_draft_id'] ?? null),
            packageUnitsCount: OzonDtoValue::int($payload['package_units_count'] ?? null),
            receiveDate: OzonDtoValue::string($payload['receive_date'] ?? null),
            rowVersion: OzonDtoValue::int($payload['row_version'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, V1ArchiveStatusEnum::class),
            supplyId: OzonDtoValue::string($payload['supply_id'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            whcOrderId: OzonDtoValue::int($payload['whc_order_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['act_file_uuid', 'bundle_id', 'bundle_sku_summary', 'created_date', 'decline_reason', 'delivery_details', 'external_order_id', 'has_act', 'has_label', 'order_draft_id', 'package_units_count', 'receive_date', 'row_version', 'status', 'supply_id', 'warehouse_id', 'whc_order_id']),
        );
    }
}
