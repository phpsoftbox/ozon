<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetFinanceBalanceV1ResponseSales implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1GetFinanceBalanceV1ResponseSalesMoney $amount,
        public ?GetFinanceBalanceV1ResponseSalesDetails $amountDetails,
        public ?V1GetFinanceBalanceV1ResponseFeeMoney $fee,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::object($payload['amount'] ?? null, V1GetFinanceBalanceV1ResponseSalesMoney::class),
            amountDetails: OzonDtoValue::object($payload['amount_details'] ?? null, GetFinanceBalanceV1ResponseSalesDetails::class),
            fee: OzonDtoValue::object($payload['fee'] ?? null, V1GetFinanceBalanceV1ResponseFeeMoney::class),
            extra: OzonDtoValue::extra($payload, ['amount', 'amount_details', 'fee']),
        );
    }
}
