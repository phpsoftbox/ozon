<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsUnfulfilledListResponsePostingsFinancialDataProducts implements OzonDtoInterface
{
    /**
     * @param list<string> $actions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $actions,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsFinancialDataProductsCommission $commission,
        public ?MoneyPostingMoney $customerPrice,
        public ?float $oldPrice,
        public ?float $payout,
        public ?float $price,
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
            commission: OzonDtoValue::object($payload['commission'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsFinancialDataProductsCommission::class),
            customerPrice: OzonDtoValue::object($payload['customer_price'] ?? null, MoneyPostingMoney::class),
            oldPrice: OzonDtoValue::float($payload['old_price'] ?? null),
            payout: OzonDtoValue::float($payload['payout'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            totalDiscountPercent: OzonDtoValue::float($payload['total_discount_percent'] ?? null),
            totalDiscountValue: OzonDtoValue::float($payload['total_discount_value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['actions', 'commission', 'customer_price', 'old_price', 'payout', 'price', 'product_id', 'quantity', 'total_discount_percent', 'total_discount_value']),
        );
    }
}
