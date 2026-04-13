<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV2ActionsAutoAddProductsListResponseProductProductWebsitePricesWebsitePrices implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyPrice $blackPrice,
        public ?MoneyMoneyGreenPrice $greenPrice,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            blackPrice: OzonDtoValue::object($payload['black_price'] ?? null, MoneyMoneyPrice::class),
            greenPrice: OzonDtoValue::object($payload['green_price'] ?? null, MoneyMoneyGreenPrice::class),
            extra: OzonDtoValue::extra($payload, ['black_price', 'green_price']),
        );
    }
}
