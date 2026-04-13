<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class OperationPosting implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $deliverySchema,
        public ?string $orderDate,
        public ?string $postingNumber,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliverySchema: OzonDtoValue::string($payload['delivery_schema'] ?? null),
            orderDate: OzonDtoValue::string($payload['order_date'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_schema', 'order_date', 'posting_number', 'warehouse_id']),
        );
    }
}
