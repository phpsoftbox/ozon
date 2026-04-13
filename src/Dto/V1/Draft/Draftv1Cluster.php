<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Draftv1Cluster implements OzonDtoInterface
{
    /**
     * @param list<Draftv1Warehouse> $warehouses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $clusterId,
        public ?string $clusterName,
        public array $warehouses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clusterId: OzonDtoValue::int($payload['cluster_id'] ?? null),
            clusterName: OzonDtoValue::string($payload['cluster_name'] ?? null),
            warehouses: OzonDtoValue::objectList($payload['warehouses'] ?? null, Draftv1Warehouse::class),
            extra: OzonDtoValue::extra($payload, ['cluster_id', 'cluster_name', 'warehouses']),
        );
    }
}
