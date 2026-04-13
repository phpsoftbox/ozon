<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V4GetProductInfoStocksResponseItem implements OzonDtoInterface
{
    /**
     * @param list<GetProductInfoStocksResponseStock> $stocks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $offerId,
        public ?int $productId,
        public array $stocks,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            stocks: OzonDtoValue::objectList($payload['stocks'] ?? null, GetProductInfoStocksResponseStock::class),
            extra: OzonDtoValue::extra($payload, ['offer_id', 'product_id', 'stocks']),
        );
    }
}
