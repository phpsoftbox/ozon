<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Pass;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ArrivalpassArrivalPassListResponseArrivalPass implements OzonDtoInterface
{
    /**
     * @param list<string> $arrivalReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $arrivalPassId,
        public array $arrivalReasons,
        public ?string $arrivalTime,
        public ?string $driverName,
        public ?string $driverPhone,
        public ?int $dropoffPointId,
        public ?bool $isActive,
        public ?string $vehicleLicensePlate,
        public ?string $vehicleModel,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            arrivalPassId: OzonDtoValue::int($payload['arrival_pass_id'] ?? null),
            arrivalReasons: OzonDtoValue::array($payload['arrival_reasons'] ?? null),
            arrivalTime: OzonDtoValue::string($payload['arrival_time'] ?? null),
            driverName: OzonDtoValue::string($payload['driver_name'] ?? null),
            driverPhone: OzonDtoValue::string($payload['driver_phone'] ?? null),
            dropoffPointId: OzonDtoValue::int($payload['dropoff_point_id'] ?? null),
            isActive: OzonDtoValue::bool($payload['is_active'] ?? null),
            vehicleLicensePlate: OzonDtoValue::string($payload['vehicle_license_plate'] ?? null),
            vehicleModel: OzonDtoValue::string($payload['vehicle_model'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['arrival_pass_id', 'arrival_reasons', 'arrival_time', 'driver_name', 'driver_phone', 'dropoff_point_id', 'is_active', 'vehicle_license_plate', 'vehicle_model', 'warehouse_id']),
        );
    }
}
