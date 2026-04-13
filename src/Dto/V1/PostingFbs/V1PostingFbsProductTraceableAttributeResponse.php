<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingFbsProductTraceableAttributeResponse implements OzonDtoInterface
{
    /**
     * @param list<V1PostingFbsProductTraceableAttributeResponseProduct> $products
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
            products: OzonDtoValue::objectList($payload['products'] ?? null, V1PostingFbsProductTraceableAttributeResponseProduct::class),
            extra: OzonDtoValue::extra($payload, ['products']),
        );
    }
}
