<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingFbsTraceableSplitResponsePosting implements OzonDtoInterface
{
    /**
     * @param list<PostingFbsTraceableSplitResponsePostingProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $postingNumber,
        public ?bool $potentialBlrTraceable,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            potentialBlrTraceable: OzonDtoValue::bool($payload['potential_blr_traceable'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, PostingFbsTraceableSplitResponsePostingProduct::class),
            extra: OzonDtoValue::extra($payload, ['posting_number', 'potential_blr_traceable', 'products']),
        );
    }
}
