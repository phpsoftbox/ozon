<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV2ActionsAutoAddProductsListResponseProduct implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyActionPriceToAutoAdd $actionPriceToAutoAdd,
        public ?bool $addMode,
        public ?MoneyMoneyBasePrice $basePrice,
        public ?string $currency,
        public ?bool $hasExpiredMinSellerPrice,
        public ?MoneyMoneyFBPget $marketplaceSellerPrice,
        public ?MoneyMoneyMaxDiscountPrice $maxDiscountPrice,
        public ?int $minActionQuantity,
        public ?MoneyMoneyMinSellerPrice $minSellerPrice,
        public ?string $name,
        public ?string $offerId,
        public ?MoneyMoneyPrice $price,
        public ?int $productId,
        public ?int $quantityToAutoAdd,
        public ?int $sku,
        public ?ActionsV2ActionsAutoAddProductsListResponseProductProductWebsitePrices $websitePrices,
        public ?bool $willBeQuarantined,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actionPriceToAutoAdd: OzonDtoValue::object($payload['action_price_to_auto_add'] ?? null, MoneyMoneyActionPriceToAutoAdd::class),
            addMode: OzonDtoValue::bool($payload['add_mode'] ?? null),
            basePrice: OzonDtoValue::object($payload['base_price'] ?? null, MoneyMoneyBasePrice::class),
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            hasExpiredMinSellerPrice: OzonDtoValue::bool($payload['has_expired_min_seller_price'] ?? null),
            marketplaceSellerPrice: OzonDtoValue::object($payload['marketplace_seller_price'] ?? null, MoneyMoneyFBPget::class),
            maxDiscountPrice: OzonDtoValue::object($payload['max_discount_price'] ?? null, MoneyMoneyMaxDiscountPrice::class),
            minActionQuantity: OzonDtoValue::int($payload['min_action_quantity'] ?? null),
            minSellerPrice: OzonDtoValue::object($payload['min_seller_price'] ?? null, MoneyMoneyMinSellerPrice::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, MoneyMoneyPrice::class),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quantityToAutoAdd: OzonDtoValue::int($payload['quantity_to_auto_add'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            websitePrices: OzonDtoValue::object($payload['website_prices'] ?? null, ActionsV2ActionsAutoAddProductsListResponseProductProductWebsitePrices::class),
            willBeQuarantined: OzonDtoValue::bool($payload['will_be_quarantined'] ?? null),
            extra: OzonDtoValue::extra($payload, ['action_price_to_auto_add', 'add_mode', 'base_price', 'currency', 'has_expired_min_seller_price', 'marketplace_seller_price', 'max_discount_price', 'min_action_quantity', 'min_seller_price', 'name', 'offer_id', 'price', 'product_id', 'quantity_to_auto_add', 'sku', 'website_prices', 'will_be_quarantined']),
        );
    }
}
