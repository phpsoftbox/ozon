<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingFbsSplitResponse implements OzonDtoInterface
{
    /**
     * @param list<V1PostingFbsSplitResponsePosting> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1PostingFbsSplitResponsePostingParent $parentPosting,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            parentPosting: OzonDtoValue::object($payload['parent_posting'] ?? null, V1PostingFbsSplitResponsePostingParent::class),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, V1PostingFbsSplitResponsePosting::class),
            extra: OzonDtoValue::extra($payload, ['parent_posting', 'postings']),
        );
    }
}
