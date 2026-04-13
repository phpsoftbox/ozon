<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Notification;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class NotificationV1NotificationListResponseThreshold implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $status,
        public ?int $threshold,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: OzonDtoValue::string($payload['status'] ?? null),
            threshold: OzonDtoValue::int($payload['threshold'] ?? null),
            extra: OzonDtoValue::extra($payload, ['status', 'threshold']),
        );
    }
}
