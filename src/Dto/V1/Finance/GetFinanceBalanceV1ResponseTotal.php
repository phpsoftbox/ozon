<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetFinanceBalanceV1ResponseTotal implements OzonDtoInterface
{
    /**
     * @param list<V1GetFinanceBalanceV1ResponsePaymentsMoney> $payments
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1GetFinanceBalanceV1ResponseAccruedMoney $accrued,
        public ?V1GetFinanceBalanceV1ResponseClosingBalanceMoney $closingBalance,
        public ?V1GetFinanceBalanceV1ResponseOpeningBalanceMoney $openingBalance,
        public array $payments,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accrued: OzonDtoValue::object($payload['accrued'] ?? null, V1GetFinanceBalanceV1ResponseAccruedMoney::class),
            closingBalance: OzonDtoValue::object($payload['closing_balance'] ?? null, V1GetFinanceBalanceV1ResponseClosingBalanceMoney::class),
            openingBalance: OzonDtoValue::object($payload['opening_balance'] ?? null, V1GetFinanceBalanceV1ResponseOpeningBalanceMoney::class),
            payments: OzonDtoValue::objectList($payload['payments'] ?? null, V1GetFinanceBalanceV1ResponsePaymentsMoney::class),
            extra: OzonDtoValue::extra($payload, ['accrued', 'closing_balance', 'opening_balance', 'payments']),
        );
    }
}
