<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseFbsPickUpPlanningListResponseResultWarehouse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $canModifyPickupPlan,
        public ?bool $hasPostingsToBePlanned,
        public ?bool $isPickupPlanned,
        public ?string $lastPickupPlanDateAt,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            canModifyPickupPlan: OzonDtoValue::bool($payload['can_modify_pickup_plan'] ?? null),
            hasPostingsToBePlanned: OzonDtoValue::bool($payload['has_postings_to_be_planned'] ?? null),
            isPickupPlanned: OzonDtoValue::bool($payload['is_pickup_planned'] ?? null),
            lastPickupPlanDateAt: OzonDtoValue::string($payload['last_pickup_plan_date_at'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['can_modify_pickup_plan', 'has_postings_to_be_planned', 'is_pickup_planned', 'last_pickup_plan_date_at', 'warehouse_id', 'warehouse_name']),
        );
    }
}
