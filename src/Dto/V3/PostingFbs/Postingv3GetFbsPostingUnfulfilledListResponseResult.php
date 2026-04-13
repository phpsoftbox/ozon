<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Postingv3GetFbsPostingUnfulfilledListResponseResult implements OzonDtoInterface
{
    /**
     * @param list<V3FbsPosting> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $count,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            count: OzonDtoValue::int($payload['count'] ?? null),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, V3FbsPosting::class),
            extra: OzonDtoValue::extra($payload, ['count', 'postings']),
        );
    }
}
