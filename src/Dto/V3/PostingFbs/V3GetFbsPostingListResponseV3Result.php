<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3GetFbsPostingListResponseV3Result implements OzonDtoInterface
{
    /**
     * @param list<V3FbsPosting> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, V3FbsPosting::class),
            extra: OzonDtoValue::extra($payload, ['has_next', 'postings']),
        );
    }
}
