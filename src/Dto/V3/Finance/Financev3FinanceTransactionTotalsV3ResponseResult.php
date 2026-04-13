<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Financev3FinanceTransactionTotalsV3ResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $accrualsForSale,
        public ?float $compensationAmount,
        public ?float $moneyTransfer,
        public ?float $othersAmount,
        public ?float $processingAndDelivery,
        public ?float $refundsAndCancellations,
        public ?float $saleCommission,
        public ?float $servicesAmount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accrualsForSale: OzonDtoValue::float($payload['accruals_for_sale'] ?? null),
            compensationAmount: OzonDtoValue::float($payload['compensation_amount'] ?? null),
            moneyTransfer: OzonDtoValue::float($payload['money_transfer'] ?? null),
            othersAmount: OzonDtoValue::float($payload['others_amount'] ?? null),
            processingAndDelivery: OzonDtoValue::float($payload['processing_and_delivery'] ?? null),
            refundsAndCancellations: OzonDtoValue::float($payload['refunds_and_cancellations'] ?? null),
            saleCommission: OzonDtoValue::float($payload['sale_commission'] ?? null),
            servicesAmount: OzonDtoValue::float($payload['services_amount'] ?? null),
            extra: OzonDtoValue::extra($payload, ['accruals_for_sale', 'compensation_amount', 'money_transfer', 'others_amount', 'processing_and_delivery', 'refunds_and_cancellations', 'sale_commission', 'services_amount']),
        );
    }
}
