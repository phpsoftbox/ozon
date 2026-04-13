<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FbsPostingProductExemplarsV3 implements OzonDtoInterface
{
    /**
     * @param list<V3FbsPostingExemplarProductV3> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            products: OzonDtoValue::objectList($payload['products'] ?? null, V3FbsPostingExemplarProductV3::class),
            extra: OzonDtoValue::extra($payload, ['products']),
        );
    }
}
