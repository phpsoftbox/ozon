<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderContentUpdateValidationResponseValidatedAssortment implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderContentUpdateValidationResponseApprovedItems> $approvedItems
     * @param list<SupplyOrderContentUpdateValidationResponseRejectedItems> $rejectedItems
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $approvedItems,
        public array $rejectedItems,
        public ?int $totalApprovedItemCount,
        public ?int $totalApprovedQuantity,
        public ?float $totalApprovedVolumeInLitres,
        public ?int $totalRejectedItemCount,
        public ?int $totalRestrictedItemCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            approvedItems: OzonDtoValue::objectList($payload['approved_items'] ?? null, SupplyOrderContentUpdateValidationResponseApprovedItems::class),
            rejectedItems: OzonDtoValue::objectList($payload['rejected_items'] ?? null, SupplyOrderContentUpdateValidationResponseRejectedItems::class),
            totalApprovedItemCount: OzonDtoValue::int($payload['total_approved_item_count'] ?? null),
            totalApprovedQuantity: OzonDtoValue::int($payload['total_approved_quantity'] ?? null),
            totalApprovedVolumeInLitres: OzonDtoValue::float($payload['total_approved_volume_in_litres'] ?? null),
            totalRejectedItemCount: OzonDtoValue::int($payload['total_rejected_item_count'] ?? null),
            totalRestrictedItemCount: OzonDtoValue::int($payload['total_restricted_item_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['approved_items', 'rejected_items', 'total_approved_item_count', 'total_approved_quantity', 'total_approved_volume_in_litres', 'total_rejected_item_count', 'total_restricted_item_count']),
        );
    }
}
