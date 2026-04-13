<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Assembly;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AssemblyFbsPostingListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1AssemblyFbsPostingListResponsePosting> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public ?string $cutoff,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            cutoff: OzonDtoValue::string($payload['cutoff'] ?? null),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, V1AssemblyFbsPostingListResponsePosting::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'cutoff', 'postings']),
        );
    }
}
