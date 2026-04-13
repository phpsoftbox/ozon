<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductInfoWarehouseStocksResponse implements OzonDtoInterface
{
    /**
     * @param list<ProductInfoWarehouseStocksResponseStocks> $stocks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public ?bool $hasNext,
        public array $stocks,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            stocks: OzonDtoValue::objectList($payload['stocks'] ?? null, ProductInfoWarehouseStocksResponseStocks::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'has_next', 'stocks']),
        );
    }
}
