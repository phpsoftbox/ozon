<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1QuantInfoResponseResultItemsQuantInfoQuantsMarketingPrice implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $price,
        public ?string $sellerPrice,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            price: OzonDtoValue::string($payload['price'] ?? null),
            sellerPrice: OzonDtoValue::string($payload['seller_price'] ?? null),
            extra: OzonDtoValue::extra($payload, ['price', 'seller_price']),
        );
    }
}
