<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1PostingFbpListResponse implements OzonDtoInterface
{
    /**
     * @param list<PostingV1PostingFbpListResponsePostings> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, PostingV1PostingFbpListResponsePostings::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'postings']),
        );
    }
}
