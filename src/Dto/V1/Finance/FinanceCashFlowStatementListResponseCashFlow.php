<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceCashFlowStatementListResponseCashFlow implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V3FinanceCashFlowStatementListResponsePeriod $period,
        public ?float $ordersAmount,
        public ?float $returnsAmount,
        public ?float $commissionAmount,
        public ?float $servicesAmount,
        public ?float $itemDeliveryAndReturnAmount,
        public ?string $currencyCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            period: OzonDtoValue::object($payload['period'] ?? null, V3FinanceCashFlowStatementListResponsePeriod::class),
            ordersAmount: OzonDtoValue::float($payload['orders_amount'] ?? null),
            returnsAmount: OzonDtoValue::float($payload['returns_amount'] ?? null),
            commissionAmount: OzonDtoValue::float($payload['commission_amount'] ?? null),
            servicesAmount: OzonDtoValue::float($payload['services_amount'] ?? null),
            itemDeliveryAndReturnAmount: OzonDtoValue::float($payload['item_delivery_and_return_amount'] ?? null),
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            extra: OzonDtoValue::extra($payload, ['period', 'orders_amount', 'returns_amount', 'commission_amount', 'services_amount', 'item_delivery_and_return_amount', 'currency_code']),
        );
    }
}
