<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cluster;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DraftClusterListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1DraftClusterListResponseCluster> $clusters
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $clusters,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clusters: OzonDtoValue::objectList($payload['clusters'] ?? null, V1DraftClusterListResponseCluster::class),
            extra: OzonDtoValue::extra($payload, ['clusters']),
        );
    }
}
