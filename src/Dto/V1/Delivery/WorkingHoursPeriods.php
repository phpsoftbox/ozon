<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WorkingHoursPeriods implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MaxPeriodsPeriod $max,
        public ?MinPeriodsPeriod $min,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            max: OzonDtoValue::object($payload['max'] ?? null, MaxPeriodsPeriod::class),
            min: OzonDtoValue::object($payload['min'] ?? null, MinPeriodsPeriod::class),
            extra: OzonDtoValue::extra($payload, ['max', 'min']),
        );
    }
}
