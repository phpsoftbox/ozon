<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderGetResponseOrder implements OzonDtoInterface
{
    /**
     * @param list<OrderSupply> $supplies
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $createdDate,
        public ?string $dataFillingDeadlineUtc,
        public ?OrderDropOffWarehouse $dropoffWarehouse,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?OrderOrderTags $orderTags,
        public ?OrderOrderStateEnum $state,
        public ?string $stateUpdatedDate,
        public array $supplies,
        public ?SupplyOrderGetResponseTimeslotTZ $timeslot,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            createdDate: OzonDtoValue::string($payload['created_date'] ?? null),
            dataFillingDeadlineUtc: OzonDtoValue::string($payload['data_filling_deadline_utc'] ?? null),
            dropoffWarehouse: OzonDtoValue::object($payload['dropoff_warehouse'] ?? null, OrderDropOffWarehouse::class),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            orderTags: OzonDtoValue::object($payload['order_tags'] ?? null, OrderOrderTags::class),
            state: OzonDtoValue::scalarObject($payload['state'] ?? null, OrderOrderStateEnum::class),
            stateUpdatedDate: OzonDtoValue::string($payload['state_updated_date'] ?? null),
            supplies: OzonDtoValue::objectList($payload['supplies'] ?? null, OrderSupply::class),
            timeslot: OzonDtoValue::object($payload['timeslot'] ?? null, SupplyOrderGetResponseTimeslotTZ::class),
            extra: OzonDtoValue::extra($payload, ['created_date', 'data_filling_deadline_utc', 'dropoff_warehouse', 'order_id', 'order_number', 'order_tags', 'state', 'state_updated_date', 'supplies', 'timeslot']),
        );
    }
}
