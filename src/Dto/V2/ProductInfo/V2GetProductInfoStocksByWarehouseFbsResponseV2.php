<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2GetProductInfoStocksByWarehouseFbsResponseV2 implements OzonDtoInterface
{
    /**
     * @param list<V2GetProductInfoStocksByWarehouseFbsResponseV2Product> $products
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
            products: OzonDtoValue::objectList($payload['products'] ?? null, V2GetProductInfoStocksByWarehouseFbsResponseV2Product::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'has_next', 'products']),
        );
    }
}
