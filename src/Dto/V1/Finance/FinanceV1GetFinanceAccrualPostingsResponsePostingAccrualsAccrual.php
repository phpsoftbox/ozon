<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualPostingsResponsePostingAccrualsAccrual implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $accrualDate,
        public ?MoneyMoneyAccrued $accrued,
        public ?int $quantity,
        public ?MoneyMoneySellerPrice $sellerPrice,
        public ?int $sku,
        public ?int $typeId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accrualDate: OzonDtoValue::string($payload['accrual_date'] ?? null),
            accrued: OzonDtoValue::object($payload['accrued'] ?? null, MoneyMoneyAccrued::class),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sellerPrice: OzonDtoValue::object($payload['seller_price'] ?? null, MoneyMoneySellerPrice::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            typeId: OzonDtoValue::int($payload['type_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['accrual_date', 'accrued', 'quantity', 'seller_price', 'sku', 'type_id']),
        );
    }
}
