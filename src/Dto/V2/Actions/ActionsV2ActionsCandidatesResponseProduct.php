<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV2ActionsCandidatesResponseProduct implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyActionPriceToAutoAdd $actionPrice,
        public ?MoneyMoneyAlertMaxActionPrice $alertMaxActionPrice,
        public ?bool $alertMaxActionPriceFailed,
        public ?float $currentBoost,
        public ?int $id,
        public ?bool $isQuarantined,
        public ?MoneyMoneyFBPget $marketplaceSellerPrice,
        public ?MoneyMoneyMaxActionPrice $maxActionPrice,
        public ?float $maxBoost,
        public ?float $minBoost,
        public ?MoneyMoneyMinSellerPrice $minSellerPrice,
        public ?int $minStock,
        public ?MoneyMoneyPrice $price,
        public ?MoneyMoneyPriceMaxElastic $priceMaxElastic,
        public ?MoneyMoneyPriceMinElastic $priceMinElastic,
        public ?int $recommendedStock,
        public ?ActionsV2ActionsCandidatesResponseProductProductWebsitePrices $websitePrices,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actionPrice: OzonDtoValue::object($payload['action_price'] ?? null, MoneyMoneyActionPriceToAutoAdd::class),
            alertMaxActionPrice: OzonDtoValue::object($payload['alert_max_action_price'] ?? null, MoneyMoneyAlertMaxActionPrice::class),
            alertMaxActionPriceFailed: OzonDtoValue::bool($payload['alert_max_action_price_failed'] ?? null),
            currentBoost: OzonDtoValue::float($payload['current_boost'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            isQuarantined: OzonDtoValue::bool($payload['is_quarantined'] ?? null),
            marketplaceSellerPrice: OzonDtoValue::object($payload['marketplace_seller_price'] ?? null, MoneyMoneyFBPget::class),
            maxActionPrice: OzonDtoValue::object($payload['max_action_price'] ?? null, MoneyMoneyMaxActionPrice::class),
            maxBoost: OzonDtoValue::float($payload['max_boost'] ?? null),
            minBoost: OzonDtoValue::float($payload['min_boost'] ?? null),
            minSellerPrice: OzonDtoValue::object($payload['min_seller_price'] ?? null, MoneyMoneyMinSellerPrice::class),
            minStock: OzonDtoValue::int($payload['min_stock'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, MoneyMoneyPrice::class),
            priceMaxElastic: OzonDtoValue::object($payload['price_max_elastic'] ?? null, MoneyMoneyPriceMaxElastic::class),
            priceMinElastic: OzonDtoValue::object($payload['price_min_elastic'] ?? null, MoneyMoneyPriceMinElastic::class),
            recommendedStock: OzonDtoValue::int($payload['recommended_stock'] ?? null),
            websitePrices: OzonDtoValue::object($payload['website_prices'] ?? null, ActionsV2ActionsCandidatesResponseProductProductWebsitePrices::class),
            extra: OzonDtoValue::extra($payload, ['action_price', 'alert_max_action_price', 'alert_max_action_price_failed', 'current_boost', 'id', 'is_quarantined', 'marketplace_seller_price', 'max_action_price', 'max_boost', 'min_boost', 'min_seller_price', 'min_stock', 'price', 'price_max_elastic', 'price_min_elastic', 'recommended_stock', 'website_prices']),
        );
    }
}
