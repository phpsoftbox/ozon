<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FbsPostingDetailRelatedPostings implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $relatedPostingNumbers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $relatedPostingNumbers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            relatedPostingNumbers: OzonDtoValue::array($payload['related_posting_numbers'] ?? null),
            extra: OzonDtoValue::extra($payload, ['related_posting_numbers']),
        );
    }
}
