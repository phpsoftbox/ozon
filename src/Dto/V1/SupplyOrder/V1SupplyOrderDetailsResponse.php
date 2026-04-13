<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SupplyOrderDetailsResponse implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderDetailsResponseSupply> $supplies
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $createdDate,
        public ?string $dataFillingDeadlineUtc,
        public ?int $dropoffWarehouseId,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?SupplyOrderDetailsResponseOrderTags $orderTags,
        public ?SupplyOrderDetailsResponseOrderStateEnum $state,
        public ?string $stateUpdatedDate,
        public array $supplies,
        public ?V1SupplyOrderDetailsResponseTimeslot $timeslot,
        public ?SupplyOrderDetailsResponseVehicle $vehicle,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            createdDate: OzonDtoValue::string($payload['created_date'] ?? null),
            dataFillingDeadlineUtc: OzonDtoValue::string($payload['data_filling_deadline_utc'] ?? null),
            dropoffWarehouseId: OzonDtoValue::int($payload['dropoff_warehouse_id'] ?? null),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            orderTags: OzonDtoValue::object($payload['order_tags'] ?? null, SupplyOrderDetailsResponseOrderTags::class),
            state: OzonDtoValue::object($payload['state'] ?? null, SupplyOrderDetailsResponseOrderStateEnum::class),
            stateUpdatedDate: OzonDtoValue::string($payload['state_updated_date'] ?? null),
            supplies: OzonDtoValue::objectList($payload['supplies'] ?? null, SupplyOrderDetailsResponseSupply::class),
            timeslot: OzonDtoValue::object($payload['timeslot'] ?? null, V1SupplyOrderDetailsResponseTimeslot::class),
            vehicle: OzonDtoValue::object($payload['vehicle'] ?? null, SupplyOrderDetailsResponseVehicle::class),
            extra: OzonDtoValue::extra($payload, ['created_date', 'data_filling_deadline_utc', 'dropoff_warehouse_id', 'order_id', 'order_number', 'order_tags', 'state', 'state_updated_date', 'supplies', 'timeslot', 'vehicle']),
        );
    }
}
