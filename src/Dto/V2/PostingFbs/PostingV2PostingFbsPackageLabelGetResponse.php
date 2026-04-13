<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV2PostingFbsPackageLabelGetResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PostingV2PostingFbsPackageLabelGetResponseError $error,
        public ?string $fileUrl,
        public ?PostingV2PostingFbsPackageLabelGetResponseStatus $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::object($payload['error'] ?? null, PostingV2PostingFbsPackageLabelGetResponseError::class),
            fileUrl: OzonDtoValue::string($payload['file_url'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, PostingV2PostingFbsPackageLabelGetResponseStatus::class),
            extra: OzonDtoValue::extra($payload, ['error', 'file_url', 'status']),
        );
    }
}
