<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductPricesDetailsResponse implements OzonDtoInterface
{
    /**
     * @param list<V1ProductPricesDetailsResponsePrice> $prices
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $prices,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            prices: OzonDtoValue::objectList($payload['prices'] ?? null, V1ProductPricesDetailsResponsePrice::class),
            extra: OzonDtoValue::extra($payload, ['prices']),
        );
    }
}
