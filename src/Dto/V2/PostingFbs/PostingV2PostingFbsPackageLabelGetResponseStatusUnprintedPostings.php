<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV2PostingFbsPackageLabelGetResponseStatusUnprintedPostings implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $message,
        public ?string $postingNumber,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            message: OzonDtoValue::string($payload['message'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            extra: OzonDtoValue::extra($payload, ['message', 'posting_number']),
        );
    }
}
