<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class TimetableWorkingHours implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $timeFrom,
        public ?string $timeTo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            timeFrom: OzonDtoValue::string($payload['time_from'] ?? null),
            timeTo: OzonDtoValue::string($payload['time_to'] ?? null),
            extra: OzonDtoValue::extra($payload, ['time_from', 'time_to']),
        );
    }
}
