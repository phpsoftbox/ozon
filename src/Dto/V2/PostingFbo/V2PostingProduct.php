<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2PostingProduct implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $digitalCodes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $digitalCodes,
        public ?string $name,
        public ?string $offerId,
        public ?string $currencyCode,
        public ?string $price,
        public ?bool $isMarketplaceBuyout,
        public ?int $quantity,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            digitalCodes: OzonDtoValue::array($payload['digital_codes'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            price: OzonDtoValue::string($payload['price'] ?? null),
            isMarketplaceBuyout: OzonDtoValue::bool($payload['is_marketplace_buyout'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['digital_codes', 'name', 'offer_id', 'currency_code', 'price', 'is_marketplace_buyout', 'quantity', 'sku']),
        );
    }
}
