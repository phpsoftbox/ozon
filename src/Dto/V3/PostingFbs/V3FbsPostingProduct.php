<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FbsPostingProduct implements OzonDtoInterface
{
    /**
     * @param list<string> $imei
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?string $offerId,
        public ?string $price,
        public ?int $quantity,
        public ?int $sku,
        public ?string $currencyCode,
        public ?bool $isBlrTraceable,
        public ?bool $isMarketplaceBuyout,
        public array $imei,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::string($payload['price'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            isBlrTraceable: OzonDtoValue::bool($payload['is_blr_traceable'] ?? null),
            isMarketplaceBuyout: OzonDtoValue::bool($payload['is_marketplace_buyout'] ?? null),
            imei: OzonDtoValue::array($payload['imei'] ?? null),
            extra: OzonDtoValue::extra($payload, ['name', 'offer_id', 'price', 'quantity', 'sku', 'currency_code', 'is_blr_traceable', 'is_marketplace_buyout', 'imei']),
        );
    }
}
