<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DraftCreateInfoResponseCluster implements OzonDtoInterface
{
    /**
     * @param list<ClusterWarehouse> $warehouses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $clusterName,
        public ?int $macrolocalClusterId,
        public ?string $supplyType,
        public array $warehouses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clusterName: OzonDtoValue::string($payload['cluster_name'] ?? null),
            macrolocalClusterId: OzonDtoValue::int($payload['macrolocal_cluster_id'] ?? null),
            supplyType: OzonDtoValue::string($payload['supply_type'] ?? null),
            warehouses: OzonDtoValue::objectList($payload['warehouses'] ?? null, ClusterWarehouse::class),
            extra: OzonDtoValue::extra($payload, ['cluster_name', 'macrolocal_cluster_id', 'supply_type', 'warehouses']),
        );
    }
}
