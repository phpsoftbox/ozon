<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpAvailableTimeslotListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1FbpAvailableTimeslotListResponseEmptyTimeslotsReason> $reasons
     * @param list<Fbpv1Timeslot> $timeslots
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $reasons,
        public array $timeslots,
        public ?string $warehouseTimezoneName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            reasons: OzonDtoValue::objectList($payload['reasons'] ?? null, V1FbpAvailableTimeslotListResponseEmptyTimeslotsReason::class),
            timeslots: OzonDtoValue::objectList($payload['timeslots'] ?? null, Fbpv1Timeslot::class),
            warehouseTimezoneName: OzonDtoValue::string($payload['warehouse_timezone_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['reasons', 'timeslots', 'warehouse_timezone_name']),
        );
    }
}
