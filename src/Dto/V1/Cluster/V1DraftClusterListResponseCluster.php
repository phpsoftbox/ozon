<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cluster;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DraftClusterListResponseCluster implements OzonDtoInterface
{
    /**
     * @param list<DraftClusterListResponseLogisticCluster> $logisticClusters
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public array $logisticClusters,
        public ?int $macrolocalClusterId,
        public ?string $name,
        public ?string $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            logisticClusters: OzonDtoValue::objectList($payload['logistic_clusters'] ?? null, DraftClusterListResponseLogisticCluster::class),
            macrolocalClusterId: OzonDtoValue::int($payload['macrolocal_cluster_id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            type: OzonDtoValue::string($payload['type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'logistic_clusters', 'macrolocal_cluster_id', 'name', 'type']),
        );
    }
}
