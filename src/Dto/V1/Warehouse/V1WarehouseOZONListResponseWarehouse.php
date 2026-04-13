<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseOZONListResponseWarehouse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $warehouseId,
        public ?string $name,
        public ?string $shortName,
        public ?string $address,
        public ?string $timezone,
        public ?bool $isActive,
        public ?WarehouseOZONListResponseWarehouseWarehouseTypeEnum $warehouseType,
        public ?int $countryIsoNumeric,
        public ?bool $isCrossDock,
        public ?bool $isDistributionCenter,
        public ?bool $isEdo,
        public ?bool $isExpress,
        public ?bool $isForSupply,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            shortName: OzonDtoValue::string($payload['short_name'] ?? null),
            address: OzonDtoValue::string($payload['address'] ?? null),
            timezone: OzonDtoValue::string($payload['timezone'] ?? null),
            isActive: OzonDtoValue::bool($payload['is_active'] ?? null),
            warehouseType: OzonDtoValue::object($payload['warehouse_type'] ?? null, WarehouseOZONListResponseWarehouseWarehouseTypeEnum::class),
            countryIsoNumeric: OzonDtoValue::int($payload['country_iso_numeric'] ?? null),
            isCrossDock: OzonDtoValue::bool($payload['is_cross_dock'] ?? null),
            isDistributionCenter: OzonDtoValue::bool($payload['is_distribution_center'] ?? null),
            isEdo: OzonDtoValue::bool($payload['is_edo'] ?? null),
            isExpress: OzonDtoValue::bool($payload['is_express'] ?? null),
            isForSupply: OzonDtoValue::bool($payload['is_for_supply'] ?? null),
            extra: OzonDtoValue::extra($payload, ['warehouse_id', 'name', 'short_name', 'address', 'timezone', 'is_active', 'warehouse_type', 'country_iso_numeric', 'is_cross_dock', 'is_distribution_center', 'is_edo', 'is_express', 'is_for_supply']),
        );
    }
}
