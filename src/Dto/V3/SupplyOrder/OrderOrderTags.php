<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class OrderOrderTags implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isEconom,
        public ?bool $isPickup,
        public ?bool $isQuant,
        public ?bool $isSuperFbo,
        public ?bool $isVirtual,
        public ?int $originalSupplyId,
        public ?bool $productSuperFbo,
        public ?int $sellerWarehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isEconom: OzonDtoValue::bool($payload['is_econom'] ?? null),
            isPickup: OzonDtoValue::bool($payload['is_pickup'] ?? null),
            isQuant: OzonDtoValue::bool($payload['is_quant'] ?? null),
            isSuperFbo: OzonDtoValue::bool($payload['is_super_fbo'] ?? null),
            isVirtual: OzonDtoValue::bool($payload['is_virtual'] ?? null),
            originalSupplyId: OzonDtoValue::int($payload['original_supply_id'] ?? null),
            productSuperFbo: OzonDtoValue::bool($payload['product_super_fbo'] ?? null),
            sellerWarehouseId: OzonDtoValue::int($payload['seller_warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_econom', 'is_pickup', 'is_quant', 'is_super_fbo', 'is_virtual', 'original_supply_id', 'product_super_fbo', 'seller_warehouse_id']),
        );
    }
}
