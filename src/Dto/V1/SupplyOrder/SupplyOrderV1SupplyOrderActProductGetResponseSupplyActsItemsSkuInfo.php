<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItemsSkuInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $barcode,
        public ?string $imageLink,
        public ?string $name,
        public ?string $offerId,
        public ?MoneyMoneyPriceWithoutVat $priceWithoutVat,
        public ?int $sku,
        public ?float $vat,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            imageLink: OzonDtoValue::string($payload['image_link'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            priceWithoutVat: OzonDtoValue::object($payload['price_without_vat'] ?? null, MoneyMoneyPriceWithoutVat::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            vat: OzonDtoValue::float($payload['vat'] ?? null),
            extra: OzonDtoValue::extra($payload, ['barcode', 'image_link', 'name', 'offer_id', 'price_without_vat', 'sku', 'vat']),
        );
    }
}
