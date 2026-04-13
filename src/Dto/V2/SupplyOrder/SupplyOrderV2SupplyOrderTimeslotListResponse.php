<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV2SupplyOrderTimeslotListResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyOrderV2SupplyOrderTimeslotListResponseLimitExceeded $limitExceeded,
        public ?SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotChangeForbidden $timeslotChangeForbidden,
        public ?SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfo $timeslotsInfo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            limitExceeded: OzonDtoValue::object($payload['limit_exceeded'] ?? null, SupplyOrderV2SupplyOrderTimeslotListResponseLimitExceeded::class),
            timeslotChangeForbidden: OzonDtoValue::object($payload['timeslot_change_forbidden'] ?? null, SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotChangeForbidden::class),
            timeslotsInfo: OzonDtoValue::object($payload['timeslots_info'] ?? null, SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfo::class),
            extra: OzonDtoValue::extra($payload, ['limit_exceeded', 'timeslot_change_forbidden', 'timeslots_info']),
        );
    }
}
