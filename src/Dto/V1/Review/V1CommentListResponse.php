<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CommentListResponse implements OzonDtoInterface
{
    /**
     * @param list<CommentListResponseComment> $comments
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $comments,
        public ?int $offset,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            comments: OzonDtoValue::objectList($payload['comments'] ?? null, CommentListResponseComment::class),
            offset: OzonDtoValue::int($payload['offset'] ?? null),
            extra: OzonDtoValue::extra($payload, ['comments', 'offset']),
        );
    }
}
