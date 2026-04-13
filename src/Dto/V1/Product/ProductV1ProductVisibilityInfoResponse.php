<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1ProductVisibilityInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<ProductV1ProductVisibilityInfoResponseItem> $items
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
            items: OzonDtoValue::objectList($payload['items'] ?? null, ProductV1ProductVisibilityInfoResponseItem::class),
            extra: OzonDtoValue::extra($payload, ['items']),
        );
    }
}
