<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Supplier;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplierAvailableWarehousesResponseSchedule implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $capacity
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $capacity,
        public ?string $date,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            capacity: OzonDtoValue::array($payload['capacity'] ?? null),
            date: OzonDtoValue::string($payload['date'] ?? null),
            extra: OzonDtoValue::extra($payload, ['capacity', 'date']),
        );
    }
}
