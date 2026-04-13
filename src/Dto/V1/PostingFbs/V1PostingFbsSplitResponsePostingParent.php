<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingFbsSplitResponsePostingParent implements OzonDtoInterface
{
    /**
     * @param list<V1ProductFbsSplit> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $postingNumber,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, V1ProductFbsSplit::class),
            extra: OzonDtoValue::extra($payload, ['posting_number', 'products']),
        );
    }
}
