<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetFinanceProductsBuyoutResponseProduct implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $amount,
        public ?float $buyoutPrice,
        public ?float $deductionByCategoryPercent,
        public ?string $name,
        public ?string $offerId,
        public ?string $postingNumber,
        public ?int $quantity,
        public ?float $sellerPricePerInstance,
        public ?int $sku,
        public ?int $vatPercent,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::float($payload['amount'] ?? null),
            buyoutPrice: OzonDtoValue::float($payload['buyout_price'] ?? null),
            deductionByCategoryPercent: OzonDtoValue::float($payload['deduction_by_category_percent'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sellerPricePerInstance: OzonDtoValue::float($payload['seller_price_per_instance'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            vatPercent: OzonDtoValue::int($payload['vat_percent'] ?? null),
            extra: OzonDtoValue::extra($payload, ['amount', 'buyout_price', 'deduction_by_category_percent', 'name', 'offer_id', 'posting_number', 'quantity', 'seller_price_per_instance', 'sku', 'vat_percent']),
        );
    }
}
