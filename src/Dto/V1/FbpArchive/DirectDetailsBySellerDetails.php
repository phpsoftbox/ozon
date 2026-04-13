<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DirectDetailsBySellerDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $driverName,
        public ?string $vehicleRegistrationNumber,
        public ?string $vehicleType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            driverName: OzonDtoValue::string($payload['driver_name'] ?? null),
            vehicleRegistrationNumber: OzonDtoValue::string($payload['vehicle_registration_number'] ?? null),
            vehicleType: OzonDtoValue::string($payload['vehicle_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['driver_name', 'vehicle_registration_number', 'vehicle_type']),
        );
    }
}
