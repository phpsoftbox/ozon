<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class OrderSupply implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isCrossdock,
        public ?int $macrolocalClusterId,
        public ?string $bundleId,
        public ?OrderSupplyStateEnum $state,
        public ?SupplyStorageWarehouse $storageWarehouse,
        public ?int $supplyId,
        public ?SupplySupplyTags $supplyTags,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isCrossdock: OzonDtoValue::bool($payload['is_crossdock'] ?? null),
            macrolocalClusterId: OzonDtoValue::int($payload['macrolocal_cluster_id'] ?? null),
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            state: OzonDtoValue::object($payload['state'] ?? null, OrderSupplyStateEnum::class),
            storageWarehouse: OzonDtoValue::object($payload['storage_warehouse'] ?? null, SupplyStorageWarehouse::class),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            supplyTags: OzonDtoValue::object($payload['supply_tags'] ?? null, SupplySupplyTags::class),
            extra: OzonDtoValue::extra($payload, ['is_crossdock', 'macrolocal_cluster_id', 'bundle_id', 'state', 'storage_warehouse', 'supply_id', 'supply_tags']),
        );
    }
}
