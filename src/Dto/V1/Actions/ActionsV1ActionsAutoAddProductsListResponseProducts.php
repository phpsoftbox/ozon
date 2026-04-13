<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV1ActionsAutoAddProductsListResponseProducts implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $actionPriceToAutoAdd,
        public ?string $addMode,
        public ?string $currency,
        public ?float $marketplaceSellerPrice,
        public ?float $maxDiscountPrice,
        public ?int $minActionQuantity,
        public ?float $minSellerPrice,
        public ?string $name,
        public ?string $offerId,
        public ?float $price,
        public ?int $productId,
        public ?int $quantityToAutoAdd,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actionPriceToAutoAdd: OzonDtoValue::float($payload['action_price_to_auto_add'] ?? null),
            addMode: OzonDtoValue::string($payload['add_mode'] ?? null),
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            marketplaceSellerPrice: OzonDtoValue::float($payload['marketplace_seller_price'] ?? null),
            maxDiscountPrice: OzonDtoValue::float($payload['max_discount_price'] ?? null),
            minActionQuantity: OzonDtoValue::int($payload['min_action_quantity'] ?? null),
            minSellerPrice: OzonDtoValue::float($payload['min_seller_price'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quantityToAutoAdd: OzonDtoValue::int($payload['quantity_to_auto_add'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['action_price_to_auto_add', 'add_mode', 'currency', 'marketplace_seller_price', 'max_discount_price', 'min_action_quantity', 'min_seller_price', 'name', 'offer_id', 'price', 'product_id', 'quantity_to_auto_add', 'sku']),
        );
    }
}
