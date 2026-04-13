<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1GetFbpPostingResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PostingV1GetFbpPostingResponsePosting $posting,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            posting: OzonDtoValue::object($payload['posting'] ?? null, PostingV1GetFbpPostingResponsePosting::class),
            extra: OzonDtoValue::extra($payload, ['posting']),
        );
    }
}
