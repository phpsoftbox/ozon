<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderDetailsResponseOrderTags implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isEconom,
        public ?bool $isSuperFbo,
        public ?bool $isVirtual,
        public ?int $originalSupplyId,
        public ?bool $productSuperFbo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isEconom: OzonDtoValue::bool($payload['is_econom'] ?? null),
            isSuperFbo: OzonDtoValue::bool($payload['is_super_fbo'] ?? null),
            isVirtual: OzonDtoValue::bool($payload['is_virtual'] ?? null),
            originalSupplyId: OzonDtoValue::int($payload['original_supply_id'] ?? null),
            productSuperFbo: OzonDtoValue::bool($payload['product_super_fbo'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_econom', 'is_super_fbo', 'is_virtual', 'original_supply_id', 'product_super_fbo']),
        );
    }
}
