<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Chat;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3ChatMessage implements OzonDtoInterface
{
    /**
     * @param list<string> $data
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ChatMessageContext $context,
        public ?string $createdAt,
        public array $data,
        public ?bool $isImage,
        public ?bool $isRead,
        public ?int $messageId,
        public ?ChatMessageModerateImageStatus $moderateImageStatus,
        public ?V3User $user,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            context: OzonDtoValue::object($payload['context'] ?? null, ChatMessageContext::class),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            data: OzonDtoValue::array($payload['data'] ?? null),
            isImage: OzonDtoValue::bool($payload['is_image'] ?? null),
            isRead: OzonDtoValue::bool($payload['is_read'] ?? null),
            messageId: OzonDtoValue::int($payload['message_id'] ?? null),
            moderateImageStatus: OzonDtoValue::object($payload['moderate_image_status'] ?? null, ChatMessageModerateImageStatus::class),
            user: OzonDtoValue::object($payload['user'] ?? null, V3User::class),
            extra: OzonDtoValue::extra($payload, ['context', 'created_at', 'data', 'is_image', 'is_read', 'message_id', 'moderate_image_status', 'user']),
        );
    }
}
