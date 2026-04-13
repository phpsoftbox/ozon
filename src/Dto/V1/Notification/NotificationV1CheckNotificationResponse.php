<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Notification;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class NotificationV1CheckNotificationResponse implements OzonDtoInterface
{
    /**
     * @param list<NotificationV1CheckNotificationResponseError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?bool $isActive,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, NotificationV1CheckNotificationResponseError::class),
            isActive: OzonDtoValue::bool($payload['is_active'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors', 'is_active']),
        );
    }
}
