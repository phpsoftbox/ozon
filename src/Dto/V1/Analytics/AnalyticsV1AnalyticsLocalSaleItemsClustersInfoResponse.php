<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: OzonDtoValue::objectList($payload['items'] ?? null, AnalyticsV1AnalyticsLocalSaleItemsClustersInfoResponseItem::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['items', 'total']),
        );
    }
}
