<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Chat;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3ChatDetailsInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $createdAt,
        public ?string $chatId,
        public ?ChatInfoChatStatusEnum $chatStatus,
        public ?ChatInfoChatTypeEnum $chatType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            chatId: OzonDtoValue::string($payload['chat_id'] ?? null),
            chatStatus: OzonDtoValue::object($payload['chat_status'] ?? null, ChatInfoChatStatusEnum::class),
            chatType: OzonDtoValue::object($payload['chat_type'] ?? null, ChatInfoChatTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['created_at', 'chat_id', 'chat_status', 'chat_type']),
        );
    }
}
