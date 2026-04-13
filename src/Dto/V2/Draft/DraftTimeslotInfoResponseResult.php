<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DraftTimeslotInfoResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ResultDropOffWarehouseTimeslots $dropOffWarehouseTimeslots,
        public ?string $requestedDateFrom,
        public ?string $requestedDateTo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dropOffWarehouseTimeslots: OzonDtoValue::object($payload['drop_off_warehouse_timeslots'] ?? null, ResultDropOffWarehouseTimeslots::class),
            requestedDateFrom: OzonDtoValue::string($payload['requested_date_from'] ?? null),
            requestedDateTo: OzonDtoValue::string($payload['requested_date_to'] ?? null),
            extra: OzonDtoValue::extra($payload, ['drop_off_warehouse_timeslots', 'requested_date_from', 'requested_date_to']),
        );
    }
}
