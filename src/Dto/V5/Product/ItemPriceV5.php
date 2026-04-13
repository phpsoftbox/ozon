<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ItemPriceV5 implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $autoActionEnabled,
        public ?bool $autoAddToOzonActionsListEnabled,
        public ?string $currencyCode,
        public ?float $marketingSellerPrice,
        public ?float $minPrice,
        public ?float $netPrice,
        public ?float $oldPrice,
        public ?float $price,
        public ?float $retailPrice,
        public ?float $vat,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            autoActionEnabled: OzonDtoValue::bool($payload['auto_action_enabled'] ?? null),
            autoAddToOzonActionsListEnabled: OzonDtoValue::bool($payload['auto_add_to_ozon_actions_list_enabled'] ?? null),
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            marketingSellerPrice: OzonDtoValue::float($payload['marketing_seller_price'] ?? null),
            minPrice: OzonDtoValue::float($payload['min_price'] ?? null),
            netPrice: OzonDtoValue::float($payload['net_price'] ?? null),
            oldPrice: OzonDtoValue::float($payload['old_price'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            retailPrice: OzonDtoValue::float($payload['retail_price'] ?? null),
            vat: OzonDtoValue::float($payload['vat'] ?? null),
            extra: OzonDtoValue::extra($payload, [
                'auto_action_enabled',
                'auto_add_to_ozon_actions_list_enabled',
                'currency_code',
                'marketing_seller_price',
                'min_price',
                'net_price',
                'old_price',
                'price',
                'retail_price',
                'vat',
            ]),
        );
    }
}
