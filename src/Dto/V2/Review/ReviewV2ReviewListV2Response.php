<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReviewV2ReviewListV2Response implements OzonDtoInterface
{
    /**
     * @param list<ReviewV2ReviewListV2ResponseReview> $reviews
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
            reviews: OzonDtoValue::objectList($payload['reviews'] ?? null, ReviewV2ReviewListV2ResponseReview::class),
            extra: OzonDtoValue::extra($payload, ['has_next', 'last_id', 'reviews']),
        );
    }
}
