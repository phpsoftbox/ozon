<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerListResponseContainers implements OzonDtoInterface
{
    /**
     * @param list<string> $availableActions
     * @param array<array-key, mixed> $relatedContainers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $availableActions,
        public ?string $cargoType,
        public ?int $containerId,
        public ?int $containerNumber,
        public ?int $countOfPostings,
        public ?string $createdAt,
        public array $relatedContainers,
        public ?string $sortType,
        public ?string $status,
        public ?string $warehouseDate,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public ?float $weight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availableActions: OzonDtoValue::array($payload['available_actions'] ?? null),
            cargoType: OzonDtoValue::string($payload['cargo_type'] ?? null),
            containerId: OzonDtoValue::int($payload['container_id'] ?? null),
            containerNumber: OzonDtoValue::int($payload['container_number'] ?? null),
            countOfPostings: OzonDtoValue::int($payload['count_of_postings'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            relatedContainers: OzonDtoValue::array($payload['related_containers'] ?? null),
            sortType: OzonDtoValue::string($payload['sort_type'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            warehouseDate: OzonDtoValue::string($payload['warehouse_date'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            weight: OzonDtoValue::float($payload['weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['available_actions', 'cargo_type', 'container_id', 'container_number', 'count_of_postings', 'created_at', 'related_containers', 'sort_type', 'status', 'warehouse_date', 'warehouse_id', 'warehouse_name', 'weight']),
        );
    }
}
