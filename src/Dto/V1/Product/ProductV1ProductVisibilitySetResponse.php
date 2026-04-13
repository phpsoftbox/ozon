<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1ProductVisibilitySetResponse implements OzonDtoInterface
{
    /**
     * @param list<ProductV1ProductVisibilitySetResponseItems> $items
     * @param list<ProductV1ProductVisibilitySetResponseItemsErrors> $itemsErrors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public array $itemsErrors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: OzonDtoValue::objectList($payload['items'] ?? null, ProductV1ProductVisibilitySetResponseItems::class),
            itemsErrors: OzonDtoValue::objectList($payload['items_errors'] ?? null, ProductV1ProductVisibilitySetResponseItemsErrors::class),
            extra: OzonDtoValue::extra($payload, ['items', 'items_errors']),
        );
    }
}
