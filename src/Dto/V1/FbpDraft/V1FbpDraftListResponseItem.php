<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftListResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $bundleId,
        public ?V1CancellationState $cancellationState,
        public ?string $createdAt,
        public ?string $deletedAt,
        public ?V1fbpDeliveryDetails $deliveryDetails,
        public ?bool $editable,
        public ?int $id,
        public ?bool $isCancelable,
        public ?bool $isDeletable,
        public ?bool $locked,
        public ?int $packageUnitsCount,
        public ?V1DraftStatusEnum $status,
        public ?string $supplyId,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            cancellationState: OzonDtoValue::object($payload['cancellation_state'] ?? null, V1CancellationState::class),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            deletedAt: OzonDtoValue::string($payload['deleted_at'] ?? null),
            deliveryDetails: OzonDtoValue::object($payload['delivery_details'] ?? null, V1fbpDeliveryDetails::class),
            editable: OzonDtoValue::bool($payload['editable'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            isCancelable: OzonDtoValue::bool($payload['is_cancelable'] ?? null),
            isDeletable: OzonDtoValue::bool($payload['is_deletable'] ?? null),
            locked: OzonDtoValue::bool($payload['locked'] ?? null),
            packageUnitsCount: OzonDtoValue::int($payload['package_units_count'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, V1DraftStatusEnum::class),
            supplyId: OzonDtoValue::string($payload['supply_id'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['bundle_id', 'cancellation_state', 'created_at', 'deleted_at', 'delivery_details', 'editable', 'id', 'is_cancelable', 'is_deletable', 'locked', 'package_units_count', 'status', 'supply_id', 'warehouse_id']),
        );
    }
}
