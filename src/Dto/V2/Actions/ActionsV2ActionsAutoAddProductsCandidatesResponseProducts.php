<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV2ActionsAutoAddProductsCandidatesResponseProducts implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyActionPriceToAutoAdd $actionPriceToAutoAdd,
        public ?MoneyMoneyBasePrice $basePrice,
        public ?string $currency,
        public ?bool $hasExpiredMinSellerPrice,
        public ?int $id,
        public ?bool $isManuallyAdded,
        public ?MoneyMoneyFBPget $marketplaceSellerPrice,
        public ?MoneyMoneyMaxDiscountPrice $maxDiscountPrice,
        public ?int $minActionQuantity,
        public ?MoneyMoneyMinSellerPrice $minSellerPrice,
        public ?string $name,
        public ?string $offerId,
        public ?MoneyMoneyPrice $price,
        public ?int $quantityToAutoAdd,
        public ?int $sku,
        public ?ActionsV2ActionsAutoAddProductsCandidatesResponseProductWebsitePrices $websitePrices,
        public ?bool $willBeQuarantined,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actionPriceToAutoAdd: OzonDtoValue::object($payload['action_price_to_auto_add'] ?? null, MoneyMoneyActionPriceToAutoAdd::class),
            basePrice: OzonDtoValue::object($payload['base_price'] ?? null, MoneyMoneyBasePrice::class),
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            hasExpiredMinSellerPrice: OzonDtoValue::bool($payload['has_expired_min_seller_price'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            isManuallyAdded: OzonDtoValue::bool($payload['is_manually_added'] ?? null),
            marketplaceSellerPrice: OzonDtoValue::object($payload['marketplace_seller_price'] ?? null, MoneyMoneyFBPget::class),
            maxDiscountPrice: OzonDtoValue::object($payload['max_discount_price'] ?? null, MoneyMoneyMaxDiscountPrice::class),
            minActionQuantity: OzonDtoValue::int($payload['min_action_quantity'] ?? null),
            minSellerPrice: OzonDtoValue::object($payload['min_seller_price'] ?? null, MoneyMoneyMinSellerPrice::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, MoneyMoneyPrice::class),
            quantityToAutoAdd: OzonDtoValue::int($payload['quantity_to_auto_add'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            websitePrices: OzonDtoValue::object($payload['website_prices'] ?? null, ActionsV2ActionsAutoAddProductsCandidatesResponseProductWebsitePrices::class),
            willBeQuarantined: OzonDtoValue::bool($payload['will_be_quarantined'] ?? null),
            extra: OzonDtoValue::extra($payload, ['action_price_to_auto_add', 'base_price', 'currency', 'has_expired_min_seller_price', 'id', 'is_manually_added', 'marketplace_seller_price', 'max_discount_price', 'min_action_quantity', 'min_seller_price', 'name', 'offer_id', 'price', 'quantity_to_auto_add', 'sku', 'website_prices', 'will_be_quarantined']),
        );
    }
}
