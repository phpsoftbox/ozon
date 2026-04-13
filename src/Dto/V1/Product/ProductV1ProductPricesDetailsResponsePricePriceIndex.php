<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1ProductPricesDetailsResponsePricePriceIndex implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ProductV1ProductPricesDetailsResponsePricePriceIndexIndexData $externalIndexData,
        public ?ProductV1ProductPricesDetailsResponsePricePriceIndexIndexDataSelf $selfIndexData,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            externalIndexData: OzonDtoValue::object($payload['external_index_data'] ?? null, ProductV1ProductPricesDetailsResponsePricePriceIndexIndexData::class),
            selfIndexData: OzonDtoValue::object($payload['self_index_data'] ?? null, ProductV1ProductPricesDetailsResponsePricePriceIndexIndexDataSelf::class),
            extra: OzonDtoValue::extra($payload, ['external_index_data', 'self_index_data']),
        );
    }
}
