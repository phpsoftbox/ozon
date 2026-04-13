<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsCategoryComparisonResponse implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsV1AnalyticsCategoryComparisonResponseItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public array $items,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            items: OzonDtoValue::objectList($payload['items'] ?? null, AnalyticsV1AnalyticsCategoryComparisonResponseItem::class),
            extra: OzonDtoValue::extra($payload, ['has_next', 'items']),
        );
    }
}
