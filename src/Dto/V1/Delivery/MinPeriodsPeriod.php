<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class MinPeriodsPeriod implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $hours,
        public ?int $minutes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hours: OzonDtoValue::int($payload['hours'] ?? null),
            minutes: OzonDtoValue::int($payload['minutes'] ?? null),
            extra: OzonDtoValue::extra($payload, ['hours', 'minutes']),
        );
    }
}
