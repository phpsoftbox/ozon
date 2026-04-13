<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class TypeTimeOfDay implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $hours,
        public ?int $minutes,
        public ?int $nanos,
        public ?int $seconds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hours: OzonDtoValue::int($payload['hours'] ?? null),
            minutes: OzonDtoValue::int($payload['minutes'] ?? null),
            nanos: OzonDtoValue::int($payload['nanos'] ?? null),
            seconds: OzonDtoValue::int($payload['seconds'] ?? null),
            extra: OzonDtoValue::extra($payload, ['hours', 'minutes', 'nanos', 'seconds']),
        );
    }
}
