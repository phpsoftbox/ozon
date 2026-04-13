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
     * @param list<NotificationV1NotificationListResponseThreshold> $availabilityStatusThresholds
     * @param list<NotificationV1NotificationListResponseNotification> $urls
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $availabilityStatusThresholds,
        public ?int $totalCount,
        public array $urls,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availabilityStatusThresholds: OzonDtoValue::objectList($payload['availability_status_thresholds'] ?? null, NotificationV1NotificationListResponseThreshold::class),
            totalCount: OzonDtoValue::int($payload['total_count'] ?? null),
            urls: OzonDtoValue::objectList($payload['urls'] ?? null, NotificationV1NotificationListResponseNotification::class),
            extra: OzonDtoValue::extra($payload, ['availability_status_thresholds', 'total_count', 'urls']),
        );
    }
}
