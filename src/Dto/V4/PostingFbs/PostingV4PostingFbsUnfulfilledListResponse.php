<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsUnfulfilledListResponse implements OzonDtoInterface
{
    /**
     * @param list<PostingV4PostingFbsUnfulfilledListResponsePostings> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $count,
        public ?string $cursor,
        public ?bool $hasNext,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            count: OzonDtoValue::int($payload['count'] ?? null),
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostings::class),
            extra: OzonDtoValue::extra($payload, ['count', 'cursor', 'has_next', 'postings']),
        );
    }
}
