<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Notification;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class NotificationV1GetNotificationPushTypeListResponse implements OzonDtoInterface
{
    /**
     * @param list<NotificationV1GetNotificationPushTypeListResponseNotificationType> $types
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $types,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            types: OzonDtoValue::objectList($payload['types'] ?? null, NotificationV1GetNotificationPushTypeListResponseNotificationType::class),
            extra: OzonDtoValue::extra($payload, ['types']),
        );
    }
}
