<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceCashFlowStatementListResponseDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $beginBalanceAmount,
        public ?DetailsDeliveryDetails $delivery,
        public ?float $invoiceTransfer,
        public ?float $loan,
        public ?DetailsPayment $payments,
        public ?V3FinanceCashFlowStatementListResponsePeriod $period,
        public ?DetailsReturnDetails $return,
        public ?DetailsRfbsDetails $rfbs,
        public ?DetailsService $services,
        public ?DetailsOthers $others,
        public ?float $endBalanceAmount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            beginBalanceAmount: OzonDtoValue::float($payload['begin_balance_amount'] ?? null),
            delivery: OzonDtoValue::object($payload['delivery'] ?? null, DetailsDeliveryDetails::class),
            invoiceTransfer: OzonDtoValue::float($payload['invoice_transfer'] ?? null),
            loan: OzonDtoValue::float($payload['loan'] ?? null),
            payments: OzonDtoValue::object($payload['payments'] ?? null, DetailsPayment::class),
            period: OzonDtoValue::object($payload['period'] ?? null, V3FinanceCashFlowStatementListResponsePeriod::class),
            return: OzonDtoValue::object($payload['return'] ?? null, DetailsReturnDetails::class),
            rfbs: OzonDtoValue::object($payload['rfbs'] ?? null, DetailsRfbsDetails::class),
            services: OzonDtoValue::object($payload['services'] ?? null, DetailsService::class),
            others: OzonDtoValue::object($payload['others'] ?? null, DetailsOthers::class),
            endBalanceAmount: OzonDtoValue::float($payload['end_balance_amount'] ?? null),
            extra: OzonDtoValue::extra($payload, ['begin_balance_amount', 'delivery', 'invoice_transfer', 'loan', 'payments', 'period', 'return', 'rfbs', 'services', 'others', 'end_balance_amount']),
        );
    }
}
