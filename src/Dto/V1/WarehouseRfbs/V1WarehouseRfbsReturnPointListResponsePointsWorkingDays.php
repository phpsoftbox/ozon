<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseRfbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseRfbsReturnPointListResponsePointsWorkingDays implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $date,
        public ?V1WarehouseRfbsReturnPointListResponsePointsWorkingDaysDayEnum $day,
        public ?string $from,
        public ?string $to,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            date: OzonDtoValue::string($payload['date'] ?? null),
            day: OzonDtoValue::scalarObject($payload['day'] ?? null, V1WarehouseRfbsReturnPointListResponsePointsWorkingDaysDayEnum::class),
            from: OzonDtoValue::string($payload['from'] ?? null),
            to: OzonDtoValue::string($payload['to'] ?? null),
            extra: OzonDtoValue::extra($payload, ['date', 'day', 'from', 'to']),
        );
    }
}
