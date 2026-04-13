<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProductCommission implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyBonus $bonus,
        public ?MoneyMoneyCoinvestment $coinvestment,
        public ?MoneyMoneyCommission $commission,
        public ?string $commissionRatio,
        public ?MoneyMoneySaleAmount $saleAmount,
        public ?MoneyMoneySaleCommission $saleCommission,
        public ?MoneyMoneySalePrice $salePrice,
        public ?MoneyMoneySellerPrice $sellerPrice,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bonus: OzonDtoValue::object($payload['bonus'] ?? null, MoneyMoneyBonus::class),
            coinvestment: OzonDtoValue::object($payload['coinvestment'] ?? null, MoneyMoneyCoinvestment::class),
            commission: OzonDtoValue::object($payload['commission'] ?? null, MoneyMoneyCommission::class),
            commissionRatio: OzonDtoValue::string($payload['commission_ratio'] ?? null),
            saleAmount: OzonDtoValue::object($payload['sale_amount'] ?? null, MoneyMoneySaleAmount::class),
            saleCommission: OzonDtoValue::object($payload['sale_commission'] ?? null, MoneyMoneySaleCommission::class),
            salePrice: OzonDtoValue::object($payload['sale_price'] ?? null, MoneyMoneySalePrice::class),
            sellerPrice: OzonDtoValue::object($payload['seller_price'] ?? null, MoneyMoneySellerPrice::class),
            extra: OzonDtoValue::extra($payload, ['bonus', 'coinvestment', 'commission', 'commission_ratio', 'sale_amount', 'sale_commission', 'sale_price', 'seller_price']),
        );
    }
}
