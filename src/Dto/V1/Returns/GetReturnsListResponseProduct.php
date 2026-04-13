<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetReturnsListResponseProduct implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $sku,
        public ?string $offerId,
        public ?string $name,
        public ?SellerReturnsv1MoneyProduct $price,
        public ?SellerReturnsv1MoneyWithoutCommission $priceWithoutCommission,
        public ?float $commissionPercent,
        public ?SellerReturnsv1MoneyCommission $commission,
        public ?int $quantity,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, SellerReturnsv1MoneyProduct::class),
            priceWithoutCommission: OzonDtoValue::object($payload['price_without_commission'] ?? null, SellerReturnsv1MoneyWithoutCommission::class),
            commissionPercent: OzonDtoValue::float($payload['commission_percent'] ?? null),
            commission: OzonDtoValue::object($payload['commission'] ?? null, SellerReturnsv1MoneyCommission::class),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            extra: OzonDtoValue::extra($payload, ['sku', 'offer_id', 'name', 'price', 'price_without_commission', 'commission_percent', 'commission', 'quantity']),
        );
    }
}
