<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItemsApprovedAmount implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneySupplyActAmount $amount,
        public ?MoneyMoneySupplyActAmountVat $amountVat,
        public ?MoneyMoneySupplyActAmountWithoutVat $amountWithoutVat,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::object($payload['amount'] ?? null, MoneyMoneySupplyActAmount::class),
            amountVat: OzonDtoValue::object($payload['amount_vat'] ?? null, MoneyMoneySupplyActAmountVat::class),
            amountWithoutVat: OzonDtoValue::object($payload['amount_without_vat'] ?? null, MoneyMoneySupplyActAmountWithoutVat::class),
            extra: OzonDtoValue::extra($payload, ['amount', 'amount_vat', 'amount_without_vat']),
        );
    }
}
