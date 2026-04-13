<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ListFBSRatingIndexPostingsV1Response implements OzonDtoInterface
{
    /**
     * @param list<ListFBSRatingIndexPostingsV1ResponseError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public array $errors,
        public ?bool $hasNext,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, ListFBSRatingIndexPostingsV1ResponseError::class),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cursor', 'errors', 'has_next']),
        );
    }
}
