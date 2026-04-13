<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ReviewListResponse implements OzonDtoInterface
{
    /**
     * @param list<ReviewListResponseReview> $reviews
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public ?string $lastId,
        public array $reviews,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            reviews: OzonDtoValue::objectList($payload['reviews'] ?? null, ReviewListResponseReview::class),
            extra: OzonDtoValue::extra($payload, ['has_next', 'last_id', 'reviews']),
        );
    }
}
