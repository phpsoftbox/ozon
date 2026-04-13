<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PriceIndexesIndexDataSelf implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $minimalPrice,
        public ?string $minimalPriceCurrency,
        public ?float $priceIndexValue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            minimalPrice: OzonDtoValue::string($payload['minimal_price'] ?? null),
            minimalPriceCurrency: OzonDtoValue::string($payload['minimal_price_currency'] ?? null),
            priceIndexValue: OzonDtoValue::float($payload['price_index_value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['minimal_price', 'minimal_price_currency', 'price_index_value']),
        );
    }
}
