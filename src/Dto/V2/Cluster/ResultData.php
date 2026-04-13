<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cluster;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ResultData implements OzonDtoInterface
{
    /**
     * @param list<DataFulfillment> $fulfillments
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $fulfillments,
        public ?DataMacrolocalCluster $macrolocalCluster,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fulfillments: OzonDtoValue::objectList($payload['fulfillments'] ?? null, DataFulfillment::class),
            macrolocalCluster: OzonDtoValue::object($payload['macrolocal_cluster'] ?? null, DataMacrolocalCluster::class),
            extra: OzonDtoValue::extra($payload, ['fulfillments', 'macrolocal_cluster']),
        );
    }
}
