<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Draftv1Warehouse implements OzonDtoInterface
{
    /**
     * @param list<V1BundleId> $bundleIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $bundleIds,
        public ?string $restrictedBundleId,
        public ?V1WarehouseStatus $status,
        public ?V1SupplyWarehouse $supplyWarehouse,
        public ?int $totalRank,
        public ?float $totalScore,
        public ?int $travelTimeDays,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleIds: OzonDtoValue::objectList($payload['bundle_ids'] ?? null, V1BundleId::class),
            restrictedBundleId: OzonDtoValue::string($payload['restricted_bundle_id'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, V1WarehouseStatus::class),
            supplyWarehouse: OzonDtoValue::object($payload['supply_warehouse'] ?? null, V1SupplyWarehouse::class),
            totalRank: OzonDtoValue::int($payload['total_rank'] ?? null),
            totalScore: OzonDtoValue::float($payload['total_score'] ?? null),
            travelTimeDays: OzonDtoValue::int($payload['travel_time_days'] ?? null),
            extra: OzonDtoValue::extra($payload, ['bundle_ids', 'restricted_bundle_id', 'status', 'supply_warehouse', 'total_rank', 'total_score', 'travel_time_days']),
        );
    }
}
