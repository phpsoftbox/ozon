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
        public ?string $availabilityStatus,
        public ?string $availabilityStatusDate,
        public ?string $createdAt,
        public ?string $disableReason,
        public ?bool $enable,
        public ?int $id,
        public ?string $problematicType,
        public ?string $reasonDetails,
        public array $types,
        public ?string $url,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availabilityStatus: OzonDtoValue::string($payload['availability_status'] ?? null),
            availabilityStatusDate: OzonDtoValue::string($payload['availability_status_date'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            disableReason: OzonDtoValue::string($payload['disable_reason'] ?? null),
            enable: OzonDtoValue::bool($payload['enable'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            problematicType: OzonDtoValue::string($payload['problematic_type'] ?? null),
            reasonDetails: OzonDtoValue::string($payload['reason_details'] ?? null),
            types: OzonDtoValue::objectList($payload['types'] ?? null, NotificationV1NotificationListResponseNotificationNotificationType::class),
            url: OzonDtoValue::string($payload['url'] ?? null),
            extra: OzonDtoValue::extra($payload, ['availability_status', 'availability_status_date', 'created_at', 'disable_reason', 'enable', 'id', 'problematic_type', 'reason_details', 'types', 'url']),
        );
    }
}
