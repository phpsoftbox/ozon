<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Chat;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ChatInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $chatId,
        public ?string $chatStatus,
        public ?string $chatType,
        public ?string $createdAt,
        public ?int $firstUnreadMessageId,
        public ?int $lastMessageId,
        public ?int $unreadCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            chatId: OzonDtoValue::string($payload['chat_id'] ?? null),
            chatStatus: OzonDtoValue::string($payload['chat_status'] ?? null),
            chatType: OzonDtoValue::string($payload['chat_type'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            firstUnreadMessageId: OzonDtoValue::int($payload['first_unread_message_id'] ?? null),
            lastMessageId: OzonDtoValue::int($payload['last_message_id'] ?? null),
            unreadCount: OzonDtoValue::int($payload['unread_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['chat_id', 'chat_status', 'chat_type', 'created_at', 'first_unread_message_id', 'last_message_id', 'unread_count']),
        );
    }
}
