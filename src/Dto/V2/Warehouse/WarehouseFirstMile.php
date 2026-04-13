<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseFirstMile implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $dropoffPointId,
        public ?bool $firstMileIsChanging,
        public ?string $timeslotFrom,
        public ?int $timeslotId,
        public ?string $timeslotTo,
        public ?FirstMileTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dropoffPointId: OzonDtoValue::string($payload['dropoff_point_id'] ?? null),
            firstMileIsChanging: OzonDtoValue::bool($payload['first_mile_is_changing'] ?? null),
            timeslotFrom: OzonDtoValue::string($payload['timeslot_from'] ?? null),
            timeslotId: OzonDtoValue::int($payload['timeslot_id'] ?? null),
            timeslotTo: OzonDtoValue::string($payload['timeslot_to'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, FirstMileTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['dropoff_point_id', 'first_mile_is_changing', 'timeslot_from', 'timeslot_id', 'timeslot_to', 'type']),
        );
    }
}
