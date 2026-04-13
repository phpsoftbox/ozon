<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoPricesV5Response implements OzonDtoInterface
{
    /**
     * @param list<GetProductInfoPricesV5ResponseItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public array $items,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            items: OzonDtoValue::objectList($payload['items'] ?? null, GetProductInfoPricesV5ResponseItem::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cursor', 'items', 'total']),
        );
    }
}
