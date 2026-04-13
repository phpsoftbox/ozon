<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV3PostingFboListResponsePostingsProducts implements OzonDtoInterface
{
    /**
     * @param list<string> $digitalCodes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $digitalCodes,
        public ?bool $isMarketplaceBuyout,
        public ?string $name,
        public ?string $offerId,
        public ?MoneyPostingMoney $price,
        public ?int $quantity,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            digitalCodes: OzonDtoValue::array($payload['digital_codes'] ?? null),
            isMarketplaceBuyout: OzonDtoValue::bool($payload['is_marketplace_buyout'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, MoneyPostingMoney::class),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['digital_codes', 'is_marketplace_buyout', 'name', 'offer_id', 'price', 'quantity', 'sku']),
        );
    }
}
