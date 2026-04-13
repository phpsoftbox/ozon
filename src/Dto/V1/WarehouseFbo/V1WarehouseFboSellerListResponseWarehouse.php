<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFboSellerListResponseWarehouse implements OzonDtoInterface
{
    /**
     * @param list<WarehouseWorkingDay> $workingDays
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?WarehouseAddress $address,
        public ?WarehouseContacts $contacts,
        public ?string $courierComment,
        public ?bool $isActive,
        public ?bool $isPickup,
        public ?int $sellerWarehouseId,
        public ?string $sellerWarehouseName,
        public array $workingDays,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::object($payload['address'] ?? null, WarehouseAddress::class),
            contacts: OzonDtoValue::object($payload['contacts'] ?? null, WarehouseContacts::class),
            courierComment: OzonDtoValue::string($payload['courier_comment'] ?? null),
            isActive: OzonDtoValue::bool($payload['is_active'] ?? null),
            isPickup: OzonDtoValue::bool($payload['is_pickup'] ?? null),
            sellerWarehouseId: OzonDtoValue::int($payload['seller_warehouse_id'] ?? null),
            sellerWarehouseName: OzonDtoValue::string($payload['seller_warehouse_name'] ?? null),
            workingDays: OzonDtoValue::objectList($payload['working_days'] ?? null, WarehouseWorkingDay::class),
            extra: OzonDtoValue::extra($payload, ['address', 'contacts', 'courier_comment', 'is_active', 'is_pickup', 'seller_warehouse_id', 'seller_warehouse_name', 'working_days']),
        );
    }
}
