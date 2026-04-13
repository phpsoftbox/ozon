<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DraftTimeslotInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<V1DropOffWarehouse> $dropOffWarehouseTimeslots
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $dropOffWarehouseTimeslots,
        public ?string $requestedDateFrom,
        public ?string $requestedDateTo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dropOffWarehouseTimeslots: OzonDtoValue::objectList($payload['drop_off_warehouse_timeslots'] ?? null, V1DropOffWarehouse::class),
            requestedDateFrom: OzonDtoValue::string($payload['requested_date_from'] ?? null),
            requestedDateTo: OzonDtoValue::string($payload['requested_date_to'] ?? null),
            extra: OzonDtoValue::extra($payload, ['drop_off_warehouse_timeslots', 'requested_date_from', 'requested_date_to']),
        );
    }
}
