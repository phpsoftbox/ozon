<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponseStocks implements OzonDtoInterface
{
    /**
     * @param list<GetProductInfoListResponseStocksStock> $stocks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasStock,
        public array $stocks,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasStock: OzonDtoValue::bool($payload['has_stock'] ?? null),
            stocks: OzonDtoValue::objectList($payload['stocks'] ?? null, GetProductInfoListResponseStocksStock::class),
            extra: OzonDtoValue::extra($payload, ['has_stock', 'stocks']),
        );
    }
}
