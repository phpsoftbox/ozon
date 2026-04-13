<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Notification;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class NotificationV1GetNotificationPushTypeListResponseNotificationType implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $description,
        public ?NotificationV1GetNotificationPushTypeListResponseNotificationTypeSellerEndpoint $sellerEndpoint,
        public ?NotificationV1GetNotificationPushTypeListResponseNotificationTypeTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            description: OzonDtoValue::string($payload['description'] ?? null),
            sellerEndpoint: OzonDtoValue::object($payload['seller_endpoint'] ?? null, NotificationV1GetNotificationPushTypeListResponseNotificationTypeSellerEndpoint::class),
            type: OzonDtoValue::object($payload['type'] ?? null, NotificationV1GetNotificationPushTypeListResponseNotificationTypeTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['description', 'seller_endpoint', 'type']),
        );
    }
}
