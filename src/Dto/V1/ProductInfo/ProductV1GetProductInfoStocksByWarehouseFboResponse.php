<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1GetProductInfoStocksByWarehouseFboResponse implements OzonDtoInterface
{
    /**
     * @param list<ProductV1GetProductInfoStocksByWarehouseFboResponseProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public ?bool $hasNext,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, ProductV1GetProductInfoStocksByWarehouseFboResponseProduct::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'has_next', 'products']),
        );
    }
}
