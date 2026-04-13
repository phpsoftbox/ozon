<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Chat;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3ChatInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V3ChatDetailsInfo $chat,
        public ?int $firstUnreadMessageId,
        public ?int $lastMessageId,
        public ?int $unreadCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            chat: OzonDtoValue::object($payload['chat'] ?? null, V3ChatDetailsInfo::class),
            firstUnreadMessageId: OzonDtoValue::int($payload['first_unread_message_id'] ?? null),
            lastMessageId: OzonDtoValue::int($payload['last_message_id'] ?? null),
            unreadCount: OzonDtoValue::int($payload['unread_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['chat', 'first_unread_message_id', 'last_message_id', 'unread_count']),
        );
    }
}
