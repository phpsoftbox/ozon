<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductPricesDetailsResponsePrice implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyCustomerPrice $customerPrice,
        public ?float $discountPercent,
        public ?string $offerId,
        public ?MoneyMoney $price,
        public ?int $sku,
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
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['customer_price', 'discount_percent', 'offer_id', 'price', 'sku']),
        );
    }
}
