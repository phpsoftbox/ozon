<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Chat;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2ChatListResponse implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $chats
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $chats,
        public ?int $totalChatsCount,
        public ?int $totalUnreadCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            chats: OzonDtoValue::array($payload['chats'] ?? null),
            totalChatsCount: OzonDtoValue::int($payload['total_chats_count'] ?? null),
            totalUnreadCount: OzonDtoValue::int($payload['total_unread_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['chats', 'total_chats_count', 'total_unread_count']),
        );
    }
}
