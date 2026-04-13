<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1PostingFbpListResponsePostingsFinancialDataProducts implements OzonDtoInterface
{
    /**
     * @param list<PostingV1PostingFbpListResponsePostingsFinancialDataProductsActions> $actions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $actions,
        public ?string $commissionsCurrencyCode,
        public ?float $oldPrice,
        public ?float $price,
        public ?int $productId,
        public ?int $quantity,
        public ?float $totalDiscountPercent,
        public ?PostingV1PostingFbpListResponsePostingsFinancialDataProductsCommission $postingCommission,
        public ?PostingV1PostingFbpListResponsePostingsFinancialDataProductsReturnCommission $returnCommission,
        public ?float $totalDiscountValue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actions: OzonDtoValue::objectList($payload['actions'] ?? null, PostingV1PostingFbpListResponsePostingsFinancialDataProductsActions::class),
            commissionsCurrencyCode: OzonDtoValue::string($payload['commissions_currency_code'] ?? null),
            oldPrice: OzonDtoValue::float($payload['old_price'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            totalDiscountPercent: OzonDtoValue::float($payload['total_discount_percent'] ?? null),
            postingCommission: OzonDtoValue::object($payload['posting_commission'] ?? null, PostingV1PostingFbpListResponsePostingsFinancialDataProductsCommission::class),
            returnCommission: OzonDtoValue::object($payload['return_commission'] ?? null, PostingV1PostingFbpListResponsePostingsFinancialDataProductsReturnCommission::class),
            totalDiscountValue: OzonDtoValue::float($payload['total_discount_value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['actions', 'commissions_currency_code', 'old_price', 'price', 'product_id', 'quantity', 'total_discount_percent', 'posting_commission', 'return_commission', 'total_discount_value']),
        );
    }
}
