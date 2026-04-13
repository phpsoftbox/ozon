<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMethodTimeslot implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ClientTimeslotDateRange $clientDateRange,
        public ?LogisticTimeslotDateRange $logisticDateRange,
        public ?int $timeslotId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clientDateRange: OzonDtoValue::object($payload['client_date_range'] ?? null, ClientTimeslotDateRange::class),
            logisticDateRange: OzonDtoValue::object($payload['logistic_date_range'] ?? null, LogisticTimeslotDateRange::class),
            timeslotId: OzonDtoValue::int($payload['timeslot_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['client_date_range', 'logistic_date_range', 'timeslot_id']),
        );
    }
}
