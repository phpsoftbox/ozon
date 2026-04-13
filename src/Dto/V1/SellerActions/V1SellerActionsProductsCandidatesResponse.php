<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SellerActions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SellerActionsProductsCandidatesResponse implements OzonDtoInterface
{
    /**
     * @param list<V1SellerActionsProductsCandidatesResponseProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $cursor,
        public ?bool $hasNext,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::int($payload['cursor'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, V1SellerActionsProductsCandidatesResponseProduct::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'has_next', 'products']),
        );
    }
}
