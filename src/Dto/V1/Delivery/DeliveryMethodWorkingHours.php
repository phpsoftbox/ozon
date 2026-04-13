<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMethodWorkingHours implements OzonDtoInterface
{
    /**
     * @param list<WorkingHoursPeriods> $periods
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $date,
        public array $periods,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            date: OzonDtoValue::string($payload['date'] ?? null),
            periods: OzonDtoValue::objectList($payload['periods'] ?? null, WorkingHoursPeriods::class),
            extra: OzonDtoValue::extra($payload, ['date', 'periods']),
        );
    }
}
