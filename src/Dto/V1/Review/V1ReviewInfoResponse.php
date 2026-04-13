<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ReviewInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<ReviewInfoResponsePhoto> $photos
     * @param list<ReviewInfoResponseVideo> $videos
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $commentsAmount,
        public ?int $dislikesAmount,
        public ?string $id,
        public ?bool $isRatingParticipant,
        public ?int $likesAmount,
        public ?string $orderStatus,
        public array $photos,
        public ?int $photosAmount,
        public ?string $publishedAt,
        public ?int $rating,
        public ?int $sku,
        public ?string $status,
        public ?string $text,
        public array $videos,
        public ?int $videosAmount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            commentsAmount: OzonDtoValue::int($payload['comments_amount'] ?? null),
            dislikesAmount: OzonDtoValue::int($payload['dislikes_amount'] ?? null),
            id: OzonDtoValue::string($payload['id'] ?? null),
            isRatingParticipant: OzonDtoValue::bool($payload['is_rating_participant'] ?? null),
            likesAmount: OzonDtoValue::int($payload['likes_amount'] ?? null),
            orderStatus: OzonDtoValue::string($payload['order_status'] ?? null),
            photos: OzonDtoValue::objectList($payload['photos'] ?? null, ReviewInfoResponsePhoto::class),
            photosAmount: OzonDtoValue::int($payload['photos_amount'] ?? null),
            publishedAt: OzonDtoValue::string($payload['published_at'] ?? null),
            rating: OzonDtoValue::int($payload['rating'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            text: OzonDtoValue::string($payload['text'] ?? null),
            videos: OzonDtoValue::objectList($payload['videos'] ?? null, ReviewInfoResponseVideo::class),
            videosAmount: OzonDtoValue::int($payload['videos_amount'] ?? null),
            extra: OzonDtoValue::extra($payload, ['comments_amount', 'dislikes_amount', 'id', 'is_rating_participant', 'likes_amount', 'order_status', 'photos', 'photos_amount', 'published_at', 'rating', 'sku', 'status', 'text', 'videos', 'videos_amount']),
        );
    }
}
