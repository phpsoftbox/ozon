<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetProductInfoDiscountedResponse implements OzonDtoInterface
{
    /**
     * @param list<V1GetProductInfoDiscountedResponseItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: OzonDtoValue::objectList($payload['items'] ?? null, V1GetProductInfoDiscountedResponseItem::class),
            extra: OzonDtoValue::extra($payload, ['items']),
        );
    }
}
