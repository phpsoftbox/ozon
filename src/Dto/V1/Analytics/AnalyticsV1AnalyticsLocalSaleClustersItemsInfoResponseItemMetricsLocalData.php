<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsLocalData implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $index,
        public ?int $localQuantity,
        public ?int $totalQuantity,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            index: OzonDtoValue::float($payload['index'] ?? null),
            localQuantity: OzonDtoValue::int($payload['local_quantity'] ?? null),
            totalQuantity: OzonDtoValue::int($payload['total_quantity'] ?? null),
            extra: OzonDtoValue::extra($payload, ['index', 'local_quantity', 'total_quantity']),
        );
    }
}
