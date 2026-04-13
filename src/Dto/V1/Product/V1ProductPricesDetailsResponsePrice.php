<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;
use PhpSoftBox\Ozon\Dto\V1\Posting\MoneyMoneyCustomerPrice;

final readonly class V1ProductPricesDetailsResponsePrice implements OzonDtoInterface
{
    /**
     * @param list<ProductV1ProductPricesDetailsResponsePricePriceIndex> $priceIndexes
     * @param list<ProductV1ProductPricesDetailsResponsePriceWeightIndex> $weightIndex
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyCustomerPrice $customerPrice,
        public ?float $discountPercent,
        public ?string $offerId,
        public ?MoneyMoney $price,
        public array $priceIndexes,
        public ?int $sku,
        public array $weightIndex,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            customerPrice: OzonDtoValue::object($payload['customer_price'] ?? null, MoneyMoneyCustomerPrice::class),
            discountPercent: OzonDtoValue::float($payload['discount_percent'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, MoneyMoney::class),
            priceIndexes: OzonDtoValue::objectList($payload['price_indexes'] ?? null, ProductV1ProductPricesDetailsResponsePricePriceIndex::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            weightIndex: OzonDtoValue::objectList($payload['weight_index'] ?? null, ProductV1ProductPricesDetailsResponsePriceWeightIndex::class),
            extra: OzonDtoValue::extra($payload, ['customer_price', 'discount_percent', 'offer_id', 'price', 'price_indexes', 'sku', 'weight_index']),
        );
    }
}
