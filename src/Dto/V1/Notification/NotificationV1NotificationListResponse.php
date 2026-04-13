<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Notification;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class NotificationV1NotificationListResponse implements OzonDtoInterface
{
    /**
     * @param list<NotificationV1NotificationListResponseNotification> $urls
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $urls,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            urls: OzonDtoValue::objectList($payload['urls'] ?? null, NotificationV1NotificationListResponseNotification::class),
            extra: OzonDtoValue::extra($payload, ['urls']),
        );
    }
}
