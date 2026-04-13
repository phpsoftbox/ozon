<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsListResponse implements OzonDtoInterface
{
    /**
     * @param list<PostingV4PostingFbsListResponsePostings> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public ?bool $hasNext,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, PostingV4PostingFbsListResponsePostings::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'has_next', 'postings']),
        );
    }
}
