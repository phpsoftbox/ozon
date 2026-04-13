<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1GetFbpPostingResponsePostingFinancialDataProducts implements OzonDtoInterface
{
    /**
     * @param list<PostingV1GetFbpPostingResponsePostingFinancialDataProductsActions> $actions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $actions,
        public ?MoneyMoneyComissions $commissionsPrice,
        public ?MoneyMoneyCustomerPrice $customerPrice,
        public ?float $oldPrice,
        public ?PostingV1GetFbpPostingResponsePostingFinancialDataProductsPostingCommission $postingCommission,
        public ?int $quantity,
        public ?PostingV1GetFbpPostingResponsePostingFinancialDataProductsReturnCommission $returnCommission,
        public ?MoneyMoneySellerPrice2 $sellerPrice,
        public ?int $sku,
        public ?float $totalDiscountPercent,
        public ?float $totalDiscountValue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actions: OzonDtoValue::objectList($payload['actions'] ?? null, PostingV1GetFbpPostingResponsePostingFinancialDataProductsActions::class),
            commissionsPrice: OzonDtoValue::object($payload['commissions_price'] ?? null, MoneyMoneyComissions::class),
            customerPrice: OzonDtoValue::object($payload['customer_price'] ?? null, MoneyMoneyCustomerPrice::class),
            oldPrice: OzonDtoValue::float($payload['old_price'] ?? null),
            postingCommission: OzonDtoValue::object($payload['posting_commission'] ?? null, PostingV1GetFbpPostingResponsePostingFinancialDataProductsPostingCommission::class),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            returnCommission: OzonDtoValue::object($payload['return_commission'] ?? null, PostingV1GetFbpPostingResponsePostingFinancialDataProductsReturnCommission::class),
            sellerPrice: OzonDtoValue::object($payload['seller_price'] ?? null, MoneyMoneySellerPrice2::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            totalDiscountPercent: OzonDtoValue::float($payload['total_discount_percent'] ?? null),
            totalDiscountValue: OzonDtoValue::float($payload['total_discount_value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['actions', 'commissions_price', 'customer_price', 'old_price', 'posting_commission', 'quantity', 'return_commission', 'seller_price', 'sku', 'total_discount_percent', 'total_discount_value']),
        );
    }
}
