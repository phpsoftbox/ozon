<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ClusterWarehouse implements OzonDtoInterface
{
    /**
     * @param list<WarehouseSupplyTagEnum> $supplyTags
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?WarehouseAvailabilityStatus $availabilityStatus,
        public ?string $bundleId,
        public ?string $restrictedBundleId,
        public ?WarehouseStorageWarehouse $storageWarehouse,
        public array $supplyTags,
        public ?int $totalRank,
        public ?float $totalScore,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availabilityStatus: OzonDtoValue::object($payload['availability_status'] ?? null, WarehouseAvailabilityStatus::class),
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            restrictedBundleId: OzonDtoValue::string($payload['restricted_bundle_id'] ?? null),
            storageWarehouse: OzonDtoValue::object($payload['storage_warehouse'] ?? null, WarehouseStorageWarehouse::class),
            supplyTags: OzonDtoValue::objectList($payload['supply_tags'] ?? null, WarehouseSupplyTagEnum::class),
            totalRank: OzonDtoValue::int($payload['total_rank'] ?? null),
            totalScore: OzonDtoValue::float($payload['total_score'] ?? null),
            extra: OzonDtoValue::extra($payload, ['availability_status', 'bundle_id', 'restricted_bundle_id', 'storage_warehouse', 'supply_tags', 'total_rank', 'total_score']),
        );
    }
}
