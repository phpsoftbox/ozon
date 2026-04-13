<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class OrderDropOffWarehouse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?string $name,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address', 'name', 'warehouse_id']),
        );
    }
}
