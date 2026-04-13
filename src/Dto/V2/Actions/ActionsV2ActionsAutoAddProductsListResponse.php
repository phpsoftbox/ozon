<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV2ActionsAutoAddProductsListResponse implements OzonDtoInterface
{
    /**
     * @param list<ActionsV2ActionsAutoAddProductsListResponseProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $products,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            products: OzonDtoValue::objectList($payload['products'] ?? null, ActionsV2ActionsAutoAddProductsListResponseProduct::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['products', 'total']),
        );
    }
}
