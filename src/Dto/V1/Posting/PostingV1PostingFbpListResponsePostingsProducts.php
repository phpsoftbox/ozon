<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1PostingFbpListResponsePostingsProducts implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyCustomerPrice $customerPrice,
        public ?string $name,
        public ?string $offerId,
        public ?MoneyPostingMoney $price,
        public ?int $quantity,
        public ?MoneyMoneySellerPrice2 $sellerPrice,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            customerPrice: OzonDtoValue::object($payload['customer_price'] ?? null, MoneyMoneyCustomerPrice::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, MoneyPostingMoney::class),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sellerPrice: OzonDtoValue::object($payload['seller_price'] ?? null, MoneyMoneySellerPrice2::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['customer_price', 'name', 'offer_id', 'price', 'quantity', 'seller_price', 'sku']),
        );
    }
}
