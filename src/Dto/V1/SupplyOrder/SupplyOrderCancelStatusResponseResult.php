<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderCancelStatusResponseResult implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderCancelStatusResponseCancelSupplyResults> $supplies
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isOrderCancelled,
        public array $supplies,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isOrderCancelled: OzonDtoValue::bool($payload['is_order_cancelled'] ?? null),
            supplies: OzonDtoValue::objectList($payload['supplies'] ?? null, SupplyOrderCancelStatusResponseCancelSupplyResults::class),
            extra: OzonDtoValue::extra($payload, ['is_order_cancelled', 'supplies']),
        );
    }
}
