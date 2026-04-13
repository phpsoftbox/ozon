<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseFirstMileType implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $dropoffPointId,
        public ?int $dropoffTimeslotId,
        public ?bool $firstMileIsChanging,
        public ?string $firstMileType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dropoffPointId: OzonDtoValue::string($payload['dropoff_point_id'] ?? null),
            dropoffTimeslotId: OzonDtoValue::int($payload['dropoff_timeslot_id'] ?? null),
            firstMileIsChanging: OzonDtoValue::bool($payload['first_mile_is_changing'] ?? null),
            firstMileType: OzonDtoValue::string($payload['first_mile_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['dropoff_point_id', 'dropoff_timeslot_id', 'first_mile_is_changing', 'first_mile_type']),
        );
    }
}
