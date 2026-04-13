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
        public ?string $dataFillingDeadline,
        public ?OrderDropOffWarehouse $dropOffWarehouse,
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
            dataFillingDeadline: OzonDtoValue::string($payload['data_filling_deadline'] ?? null),
            dropOffWarehouse: OzonDtoValue::object($payload['drop_off_warehouse'] ?? null, OrderDropOffWarehouse::class),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            orderTags: OzonDtoValue::object($payload['order_tags'] ?? null, OrderOrderTags::class),
            state: OzonDtoValue::object($payload['state'] ?? null, OrderOrderStateEnum::class),
            stateUpdatedDate: OzonDtoValue::string($payload['state_updated_date'] ?? null),
            supplies: OzonDtoValue::objectList($payload['supplies'] ?? null, OrderSupply::class),
            timeslot: OzonDtoValue::object($payload['timeslot'] ?? null, SupplyOrderGetResponseTimeslotTZ::class),
            extra: OzonDtoValue::extra($payload, ['created_date', 'data_filling_deadline', 'drop_off_warehouse', 'order_id', 'order_number', 'order_tags', 'state', 'state_updated_date', 'supplies', 'timeslot']),
        );
    }
}
