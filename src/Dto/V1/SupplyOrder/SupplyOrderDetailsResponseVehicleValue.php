<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderDetailsResponseVehicleValue implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $driverIsDeleted,
        public ?string $driverName,
        public ?string $driverPhone,
        public ?bool $vehicleIsDeleted,
        public ?string $vehicleModel,
        public ?string $vehicleNumber,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            driverIsDeleted: OzonDtoValue::bool($payload['driver_is_deleted'] ?? null),
            driverName: OzonDtoValue::string($payload['driver_name'] ?? null),
            driverPhone: OzonDtoValue::string($payload['driver_phone'] ?? null),
            vehicleIsDeleted: OzonDtoValue::bool($payload['vehicle_is_deleted'] ?? null),
            vehicleModel: OzonDtoValue::string($payload['vehicle_model'] ?? null),
            vehicleNumber: OzonDtoValue::string($payload['vehicle_number'] ?? null),
            extra: OzonDtoValue::extra($payload, ['driver_is_deleted', 'driver_name', 'driver_phone', 'vehicle_is_deleted', 'vehicle_model', 'vehicle_number']),
        );
    }
}
