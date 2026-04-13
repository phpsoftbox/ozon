<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReviewListResponseReview implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $commentsAmount,
        public ?string $id,
        public ?bool $isRatingParticipant,
        public ?string $orderStatus,
        public ?int $photosAmount,
        public ?string $publishedAt,
        public ?int $rating,
        public ?int $sku,
        public ?string $status,
        public ?string $text,
        public ?int $videosAmount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            commentsAmount: OzonDtoValue::int($payload['comments_amount'] ?? null),
            id: OzonDtoValue::string($payload['id'] ?? null),
            isRatingParticipant: OzonDtoValue::bool($payload['is_rating_participant'] ?? null),
            orderStatus: OzonDtoValue::string($payload['order_status'] ?? null),
            photosAmount: OzonDtoValue::int($payload['photos_amount'] ?? null),
            publishedAt: OzonDtoValue::string($payload['published_at'] ?? null),
            rating: OzonDtoValue::int($payload['rating'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            text: OzonDtoValue::string($payload['text'] ?? null),
            videosAmount: OzonDtoValue::int($payload['videos_amount'] ?? null),
            extra: OzonDtoValue::extra($payload, ['comments_amount', 'id', 'is_rating_participant', 'order_status', 'photos_amount', 'published_at', 'rating', 'sku', 'status', 'text', 'videos_amount']),
        );
    }
}
