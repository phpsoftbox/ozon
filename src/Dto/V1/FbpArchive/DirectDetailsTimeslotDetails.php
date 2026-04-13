<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DirectDetailsTimeslotDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1fbpTimeslot $timeslot,
        public ?string $timeslotReservationId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            timeslot: OzonDtoValue::object($payload['timeslot'] ?? null, V1fbpTimeslot::class),
            timeslotReservationId: OzonDtoValue::string($payload['timeslot_reservation_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['timeslot', 'timeslot_reservation_id']),
        );
    }
}
