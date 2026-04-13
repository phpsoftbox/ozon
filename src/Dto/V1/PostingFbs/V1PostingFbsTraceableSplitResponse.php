<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingFbsTraceableSplitResponse implements OzonDtoInterface
{
    /**
     * @param list<V1PostingFbsTraceableSplitResponsePosting> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, V1PostingFbsTraceableSplitResponsePosting::class),
            extra: OzonDtoValue::extra($payload, ['postings']),
        );
    }
}
