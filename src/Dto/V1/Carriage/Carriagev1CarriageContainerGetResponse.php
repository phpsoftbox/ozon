<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerGetResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $availableActions
     * @param list<Carriagev1CarriageContainerGetResponsePostings> $postings
     * @param list<string> $relatedContainerIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $availableActions,
        public ?string $cargoType,
        public ?int $containerId,
        public ?int $containerNumber,
        public ?int $countOfPostings,
        public ?string $createdAt,
        public ?int $parentContainerId,
        public array $postings,
        public array $relatedContainerIds,
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
            parentContainerId: OzonDtoValue::int($payload['parent_container_id'] ?? null),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, Carriagev1CarriageContainerGetResponsePostings::class),
            relatedContainerIds: OzonDtoValue::array($payload['related_container_ids'] ?? null),
            sortType: OzonDtoValue::string($payload['sort_type'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            warehouseDate: OzonDtoValue::string($payload['warehouse_date'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            weight: OzonDtoValue::float($payload['weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['available_actions', 'cargo_type', 'container_id', 'container_number', 'count_of_postings', 'created_at', 'parent_container_id', 'postings', 'related_container_ids', 'sort_type', 'status', 'warehouse_date', 'warehouse_id', 'warehouse_name', 'weight']),
        );
    }
}
