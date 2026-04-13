<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V4GetProductInfoStocksResponse implements OzonDtoInterface
{
    /**
     * @param list<V4GetProductInfoStocksResponseItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public array $items,
        public ?int $total,
        public ?int $totalItems,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            items: OzonDtoValue::objectList($payload['items'] ?? null, V4GetProductInfoStocksResponseItem::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            totalItems: OzonDtoValue::int($payload['total_items'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cursor', 'items', 'total', 'total_items']),
        );
    }
}
