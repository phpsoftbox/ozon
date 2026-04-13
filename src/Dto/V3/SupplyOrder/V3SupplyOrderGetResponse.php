<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3SupplyOrderGetResponse implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderGetResponseOrder> $orders
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $orders,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orders: OzonDtoValue::objectList($payload['orders'] ?? null, SupplyOrderGetResponseOrder::class),
            extra: OzonDtoValue::extra($payload, ['orders']),
        );
    }
}
