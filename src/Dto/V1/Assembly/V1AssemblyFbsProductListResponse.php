<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Assembly;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AssemblyFbsProductListResponse implements OzonDtoInterface
{
    /**
     * @param list<AssemblyFbsProductListResponseProducts> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public array $products,
        public ?int $productsCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, AssemblyFbsProductListResponseProducts::class),
            productsCount: OzonDtoValue::int($payload['products_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['has_next', 'products', 'products_count']),
        );
    }
}
