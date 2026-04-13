<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1ProductPricesDetailsResponsePricePriceIndexIndexDataSelf implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneySelf $minPrice,
        public ?float $priceIndex,
        public ?string $url,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            minPrice: OzonDtoValue::object($payload['min_price'] ?? null, MoneyMoneySelf::class),
            priceIndex: OzonDtoValue::float($payload['price_index'] ?? null),
            url: OzonDtoValue::string($payload['url'] ?? null),
            extra: OzonDtoValue::extra($payload, ['min_price', 'price_index', 'url']),
        );
    }
}
