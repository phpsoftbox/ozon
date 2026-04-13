<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1GetFbpPostingResponsePostingProducts implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasImei,
        public ?MoneyMoneyFBPget $marketplaceSellerPrice,
        public ?string $name,
        public ?string $offerId,
        public ?int $quantity,
        public ?int $sku,
        public ?float $weightMax,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasImei: OzonDtoValue::bool($payload['has_imei'] ?? null),
            marketplaceSellerPrice: OzonDtoValue::object($payload['marketplace_seller_price'] ?? null, MoneyMoneyFBPget::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            weightMax: OzonDtoValue::float($payload['weight_max'] ?? null),
            extra: OzonDtoValue::extra($payload, ['has_imei', 'marketplace_seller_price', 'name', 'offer_id', 'quantity', 'sku', 'weight_max']),
        );
    }
}
