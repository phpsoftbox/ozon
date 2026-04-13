<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PriceIndexData implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $minPrice,
        public ?string $minPriceCurrency,
        public ?float $priceIndexValue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            minPrice: OzonDtoValue::float($payload['min_price'] ?? null),
            minPriceCurrency: OzonDtoValue::string($payload['min_price_currency'] ?? null),
            priceIndexValue: OzonDtoValue::float($payload['price_index_value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['min_price', 'min_price_currency', 'price_index_value']),
        );
    }
}
