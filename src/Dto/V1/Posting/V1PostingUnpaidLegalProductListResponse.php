<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingUnpaidLegalProductListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1PostingUnpaidLegalProductListResponseProducts> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $products,
        public ?string $cursor,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            products: OzonDtoValue::objectList($payload['products'] ?? null, V1PostingUnpaidLegalProductListResponseProducts::class),
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            extra: OzonDtoValue::extra($payload, ['products', 'cursor']),
        );
    }
}
