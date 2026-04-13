<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Productv3GetProductListResponseItem implements OzonDtoInterface
{
    /**
     * @param list<Productv3GetProductListResponseItemQuant> $quants
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $archived,
        public ?bool $hasFboStocks,
        public ?bool $hasFbsStocks,
        public ?bool $isDiscounted,
        public ?string $offerId,
        public ?int $productId,
        public array $quants,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            archived: OzonDtoValue::bool($payload['archived'] ?? null),
            hasFboStocks: OzonDtoValue::bool($payload['has_fbo_stocks'] ?? null),
            hasFbsStocks: OzonDtoValue::bool($payload['has_fbs_stocks'] ?? null),
            isDiscounted: OzonDtoValue::bool($payload['is_discounted'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quants: OzonDtoValue::objectList($payload['quants'] ?? null, Productv3GetProductListResponseItemQuant::class),
            extra: OzonDtoValue::extra($payload, ['archived', 'has_fbo_stocks', 'has_fbs_stocks', 'is_discounted', 'offer_id', 'product_id', 'quants']),
        );
    }
}
