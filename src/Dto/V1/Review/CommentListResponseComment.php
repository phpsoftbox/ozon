<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CommentListResponseComment implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $id,
        public ?bool $isOfficial,
        public ?bool $isOwner,
        public ?string $parentCommentId,
        public ?string $publishedAt,
        public ?string $text,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::string($payload['id'] ?? null),
            isOfficial: OzonDtoValue::bool($payload['is_official'] ?? null),
            isOwner: OzonDtoValue::bool($payload['is_owner'] ?? null),
            parentCommentId: OzonDtoValue::string($payload['parent_comment_id'] ?? null),
            publishedAt: OzonDtoValue::string($payload['published_at'] ?? null),
            text: OzonDtoValue::string($payload['text'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'is_official', 'is_owner', 'parent_comment_id', 'published_at', 'text']),
        );
    }
}
