<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReviewV2ReviewInfoV2Response implements OzonDtoInterface
{
    /**
     * @param list<ReviewV2ReviewInfoV2ResponsePhoto> $photos
     * @param list<ReviewV2ReviewInfoV2ResponseVideo> $videos
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $commentsAmount,
        public ?int $dislikesAmount,
        public ?string $id,
        public ?bool $isRatingParticipant,
        public ?int $likesAmount,
        public ?ReviewV2ReviewInfoV2ResponseOrderStatusEnum $orderStatus,
        public array $photos,
        public ?int $photosAmount,
        public ?string $publishedAt,
        public ?int $rating,
        public ?int $sku,
        public ?ReviewV2ReviewInfoV2ResponseStatusEnum $status,
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
            orderStatus: OzonDtoValue::scalarObject($payload['order_status'] ?? null, ReviewV2ReviewInfoV2ResponseOrderStatusEnum::class),
            photos: OzonDtoValue::objectList($payload['photos'] ?? null, ReviewV2ReviewInfoV2ResponsePhoto::class),
            photosAmount: OzonDtoValue::int($payload['photos_amount'] ?? null),
            publishedAt: OzonDtoValue::string($payload['published_at'] ?? null),
            rating: OzonDtoValue::int($payload['rating'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, ReviewV2ReviewInfoV2ResponseStatusEnum::class),
            text: OzonDtoValue::string($payload['text'] ?? null),
            videos: OzonDtoValue::objectList($payload['videos'] ?? null, ReviewV2ReviewInfoV2ResponseVideo::class),
            videosAmount: OzonDtoValue::int($payload['videos_amount'] ?? null),
            extra: OzonDtoValue::extra($payload, ['comments_amount', 'dislikes_amount', 'id', 'is_rating_participant', 'likes_amount', 'order_status', 'photos', 'photos_amount', 'published_at', 'rating', 'sku', 'status', 'text', 'videos', 'videos_amount']),
        );
    }
}
