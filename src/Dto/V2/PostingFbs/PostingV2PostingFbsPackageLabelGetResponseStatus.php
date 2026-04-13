<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV2PostingFbsPackageLabelGetResponseStatus implements OzonDtoInterface
{
    /**
     * @param list<PostingV2PostingFbsPackageLabelGetResponseStatusUnprintedPostings> $unprintedPostings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?int $postingsCount,
        public ?int $printedPostingsCount,
        public array $unprintedPostings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            postingsCount: OzonDtoValue::int($payload['postings_count'] ?? null),
            printedPostingsCount: OzonDtoValue::int($payload['printed_postings_count'] ?? null),
            unprintedPostings: OzonDtoValue::objectList($payload['unprinted_postings'] ?? null, PostingV2PostingFbsPackageLabelGetResponseStatusUnprintedPostings::class),
            extra: OzonDtoValue::extra($payload, ['code', 'postings_count', 'printed_postings_count', 'unprinted_postings']),
        );
    }
}
