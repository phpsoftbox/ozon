<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsListResponsePostingsProducts implements OzonDtoInterface
{
    /**
     * @param list<string> $imei
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $imei,
        public ?bool $isBlrTraceable,
        public ?bool $isMarketplaceBuyout,
        public ?string $name,
        public ?string $offerId,
        public ?MoneyPostingMoney $price,
        public ?string $productColor,
        public ?int $quantity,
        public ?int $sku,
        public ?float $weight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            imei: OzonDtoValue::array($payload['imei'] ?? null),
            isBlrTraceable: OzonDtoValue::bool($payload['is_blr_traceable'] ?? null),
            isMarketplaceBuyout: OzonDtoValue::bool($payload['is_marketplace_buyout'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, MoneyPostingMoney::class),
            productColor: OzonDtoValue::string($payload['product_color'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            weight: OzonDtoValue::float($payload['weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['imei', 'is_blr_traceable', 'is_marketplace_buyout', 'name', 'offer_id', 'price', 'product_color', 'quantity', 'sku', 'weight']),
        );
    }
}
