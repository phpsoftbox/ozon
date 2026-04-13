<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Notification;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class NotificationV1NotificationListResponseNotification implements OzonDtoInterface
{
    /**
     * @param list<NotificationV1NotificationListResponseNotificationNotificationType> $types
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $createdAt,
        public ?bool $enable,
        public ?int $id,
        public array $types,
        public ?string $url,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            enable: OzonDtoValue::bool($payload['enable'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            types: OzonDtoValue::objectList($payload['types'] ?? null, NotificationV1NotificationListResponseNotificationNotificationType::class),
            url: OzonDtoValue::string($payload['url'] ?? null),
            extra: OzonDtoValue::extra($payload, ['created_at', 'enable', 'id', 'types', 'url']),
        );
    }
}
