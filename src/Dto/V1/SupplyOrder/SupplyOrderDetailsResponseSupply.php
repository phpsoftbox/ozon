<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderDetailsResponseSupply implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyCancellationAllowability $cancellationAllowability,
        public ?SupplyContent $content,
        public ?SupplyETTN $ettnInfo,
        public ?bool $isCrossdock,
        public ?SupplyOverdueReasonEnum $overdueReason,
        public ?SupplyStorageWarehouse $storageWarehouse,
        public ?int $macrolocalClusterId,
        public ?int $supplyId,
        public ?SupplyStateEnum $supplyState,
        public ?SupplyTags $supplyTags,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cancellationAllowability: OzonDtoValue::object($payload['cancellation_allowability'] ?? null, SupplyCancellationAllowability::class),
            content: OzonDtoValue::object($payload['content'] ?? null, SupplyContent::class),
            ettnInfo: OzonDtoValue::object($payload['ettn_info'] ?? null, SupplyETTN::class),
            isCrossdock: OzonDtoValue::bool($payload['is_crossdock'] ?? null),
            overdueReason: OzonDtoValue::object($payload['overdue_reason'] ?? null, SupplyOverdueReasonEnum::class),
            storageWarehouse: OzonDtoValue::object($payload['storage_warehouse'] ?? null, SupplyStorageWarehouse::class),
            macrolocalClusterId: OzonDtoValue::int($payload['macrolocal_cluster_id'] ?? null),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            supplyState: OzonDtoValue::object($payload['supply_state'] ?? null, SupplyStateEnum::class),
            supplyTags: OzonDtoValue::object($payload['supply_tags'] ?? null, SupplyTags::class),
            extra: OzonDtoValue::extra($payload, ['cancellation_allowability', 'content', 'ettn_info', 'is_crossdock', 'overdue_reason', 'storage_warehouse', 'macrolocal_cluster_id', 'supply_id', 'supply_state', 'supply_tags']),
        );
    }
}
