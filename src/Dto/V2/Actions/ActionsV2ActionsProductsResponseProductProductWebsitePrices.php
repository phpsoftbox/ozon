<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV2ActionsProductsResponseProductProductWebsitePrices implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $pricesBySchema
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyWebsitePrices $price,
        public array $pricesBySchema,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            price: OzonDtoValue::object($payload['price'] ?? null, MoneyMoneyWebsitePrices::class),
            pricesBySchema: OzonDtoValue::array($payload['prices_by_schema'] ?? null),
            extra: OzonDtoValue::extra($payload, ['price', 'prices_by_schema']),
        );
    }
}
