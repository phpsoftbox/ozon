<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseFbsPickUpHistoryListResponseHistoryEntity implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $plannedDate,
        public ?string $status,
        public ?string $updatedAt,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public ?bool $wasPlanned,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            plannedDate: OzonDtoValue::string($payload['planned_date'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            wasPlanned: OzonDtoValue::bool($payload['was_planned'] ?? null),
            extra: OzonDtoValue::extra($payload, ['planned_date', 'status', 'updated_at', 'warehouse_id', 'warehouse_name', 'was_planned']),
        );
    }
}
