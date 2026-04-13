<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Supplier;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplierAvailableWarehousesResponseCapacity implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $start,
        public ?string $end,
        public ?int $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            start: OzonDtoValue::string($payload['start'] ?? null),
            end: OzonDtoValue::string($payload['end'] ?? null),
            value: OzonDtoValue::int($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['start', 'end', 'value']),
        );
    }
}
