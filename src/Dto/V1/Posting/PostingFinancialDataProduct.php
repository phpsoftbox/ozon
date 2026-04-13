<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingFinancialDataProduct implements OzonDtoInterface
{
    /**
     * @param list<string> $actions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $actions,
        public ?string $currencyCode,
        public ?string $customerCurrencyCode,
        public ?float $commissionAmount,
        public ?int $commissionPercent,
        public ?string $commissionsCurrencyCode,
        public ?float $oldPrice,
        public ?float $payout,
        public ?float $price,
        public ?float $customerPrice,
        public ?int $productId,
        public ?int $quantity,
        public ?float $totalDiscountPercent,
        public ?float $totalDiscountValue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actions: OzonDtoValue::array($payload['actions'] ?? null),
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            customerCurrencyCode: OzonDtoValue::string($payload['customer_currency_code'] ?? null),
            commissionAmount: OzonDtoValue::float($payload['commission_amount'] ?? null),
            commissionPercent: OzonDtoValue::int($payload['commission_percent'] ?? null),
            commissionsCurrencyCode: OzonDtoValue::string($payload['commissions_currency_code'] ?? null),
            oldPrice: OzonDtoValue::float($payload['old_price'] ?? null),
            payout: OzonDtoValue::float($payload['payout'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            customerPrice: OzonDtoValue::float($payload['customer_price'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            totalDiscountPercent: OzonDtoValue::float($payload['total_discount_percent'] ?? null),
            totalDiscountValue: OzonDtoValue::float($payload['total_discount_value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['actions', 'currency_code', 'customer_currency_code', 'commission_amount', 'commission_percent', 'commissions_currency_code', 'old_price', 'payout', 'price', 'customer_price', 'product_id', 'quantity', 'total_discount_percent', 'total_discount_value']),
        );
    }
}
