<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SellerApiProduct implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $id,
        public ?float $price,
        public ?float $actionPrice,
        public ?bool $alertMaxActionPriceFailed,
        public ?float $alertMaxActionPrice,
        public ?float $maxActionPrice,
        public ?string $addMode,
        public ?float $minStock,
        public ?float $stock,
        public ?float $currentBoost,
        public ?float $priceMinElastic,
        public ?float $priceMaxElastic,
        public ?float $minBoost,
        public ?float $maxBoost,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::float($payload['id'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            actionPrice: OzonDtoValue::float($payload['action_price'] ?? null),
            alertMaxActionPriceFailed: OzonDtoValue::bool($payload['alert_max_action_price_failed'] ?? null),
            alertMaxActionPrice: OzonDtoValue::float($payload['alert_max_action_price'] ?? null),
            maxActionPrice: OzonDtoValue::float($payload['max_action_price'] ?? null),
            addMode: OzonDtoValue::string($payload['add_mode'] ?? null),
            minStock: OzonDtoValue::float($payload['min_stock'] ?? null),
            stock: OzonDtoValue::float($payload['stock'] ?? null),
            currentBoost: OzonDtoValue::float($payload['current_boost'] ?? null),
            priceMinElastic: OzonDtoValue::float($payload['price_min_elastic'] ?? null),
            priceMaxElastic: OzonDtoValue::float($payload['price_max_elastic'] ?? null),
            minBoost: OzonDtoValue::float($payload['min_boost'] ?? null),
            maxBoost: OzonDtoValue::float($payload['max_boost'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'price', 'action_price', 'alert_max_action_price_failed', 'alert_max_action_price', 'max_action_price', 'add_mode', 'min_stock', 'stock', 'current_boost', 'price_min_elastic', 'price_max_elastic', 'min_boost', 'max_boost']),
        );
    }
}
