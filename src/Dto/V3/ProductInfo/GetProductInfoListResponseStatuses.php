<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponseStatuses implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isCreated,
        public ?string $moderateStatus,
        public ?string $status,
        public ?string $statusDescription,
        public ?string $statusFailed,
        public ?string $statusName,
        public ?string $statusTooltip,
        public ?string $statusUpdatedAt,
        public ?string $validationStatus,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isCreated: OzonDtoValue::bool($payload['is_created'] ?? null),
            moderateStatus: OzonDtoValue::string($payload['moderate_status'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            statusDescription: OzonDtoValue::string($payload['status_description'] ?? null),
            statusFailed: OzonDtoValue::string($payload['status_failed'] ?? null),
            statusName: OzonDtoValue::string($payload['status_name'] ?? null),
            statusTooltip: OzonDtoValue::string($payload['status_tooltip'] ?? null),
            statusUpdatedAt: OzonDtoValue::string($payload['status_updated_at'] ?? null),
            validationStatus: OzonDtoValue::string($payload['validation_status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_created', 'moderate_status', 'status', 'status_description', 'status_failed', 'status_name', 'status_tooltip', 'status_updated_at', 'validation_status']),
        );
    }
}
