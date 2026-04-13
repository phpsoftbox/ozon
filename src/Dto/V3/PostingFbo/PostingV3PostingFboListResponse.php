<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV3PostingFboListResponse implements OzonDtoInterface
{
    /**
     * @param list<PostingV3PostingFboListResponsePostings> $postings
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
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, PostingV3PostingFboListResponsePostings::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'has_next', 'postings']),
        );
    }
}
