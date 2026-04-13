<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Chat;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3ChatListResponse implements OzonDtoInterface
{
    /**
     * @param list<V3ChatInfo> $chats
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $chats,
        public ?int $totalUnreadCount,
        public ?string $cursor,
        public ?bool $hasNext,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            chats: OzonDtoValue::objectList($payload['chats'] ?? null, V3ChatInfo::class),
            totalUnreadCount: OzonDtoValue::int($payload['total_unread_count'] ?? null),
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            extra: OzonDtoValue::extra($payload, ['chats', 'total_unread_count', 'cursor', 'has_next']),
        );
    }
}
