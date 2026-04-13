<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DropOffWarehouseTimeslotsDayTimeslot implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $fromInTimezone,
        public ?string $toInTimezone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fromInTimezone: OzonDtoValue::string($payload['from_in_timezone'] ?? null),
            toInTimezone: OzonDtoValue::string($payload['to_in_timezone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['from_in_timezone', 'to_in_timezone']),
        );
    }
}
