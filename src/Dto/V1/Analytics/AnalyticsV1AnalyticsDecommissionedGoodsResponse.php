<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsDecommissionedGoodsResponse implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsV1AnalyticsDecommissionedGoodsResponseItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public ?int $totalCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: OzonDtoValue::objectList($payload['items'] ?? null, AnalyticsV1AnalyticsDecommissionedGoodsResponseItem::class),
            totalCount: OzonDtoValue::int($payload['total_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['items', 'total_count']),
        );
    }
}
