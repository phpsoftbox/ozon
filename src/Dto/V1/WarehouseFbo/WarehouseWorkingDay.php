<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseWorkingDay implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?WarehouseWorkingDayDayEnum $day,
        public ?string $timeFromLocal,
        public ?string $timeToLocal,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            day: OzonDtoValue::object($payload['day'] ?? null, WarehouseWorkingDayDayEnum::class),
            timeFromLocal: OzonDtoValue::string($payload['time_from_local'] ?? null),
            timeToLocal: OzonDtoValue::string($payload['time_to_local'] ?? null),
            extra: OzonDtoValue::extra($payload, ['day', 'time_from_local', 'time_to_local']),
        );
    }
}
