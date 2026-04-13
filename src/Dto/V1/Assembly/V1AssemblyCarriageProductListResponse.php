<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Assembly;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AssemblyCarriageProductListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1AssemblyCarriageProductListResponseProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, V1AssemblyCarriageProductListResponseProduct::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'products']),
        );
    }
}
