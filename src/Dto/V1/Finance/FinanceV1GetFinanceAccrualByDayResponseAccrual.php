<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualByDayResponseAccrual implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?FinanceV1GetFinanceAccrualByDayResponseAccrualAccruedCategoryEnum $accruedCategory,
        public ?FinanceV1GetFinanceAccrualByDayResponseAccrualContainerFees $containerFees,
        public ?string $date,
        public ?FinanceV1GetFinanceAccrualByDayResponseAccrualItemFees $itemFees,
        public ?FinanceV1GetFinanceAccrualByDayResponseAccrualNonItemFee $nonItemFee,
        public ?FinanceV1GetFinanceAccrualByDayResponseAccrualPosting $posting,
        public ?MoneyMoneyTotalAmount $totalAmount,
        public ?int $accrualId,
        public ?string $unitNumber,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accruedCategory: OzonDtoValue::scalarObject($payload['accrued_category'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualAccruedCategoryEnum::class),
            containerFees: OzonDtoValue::object($payload['container_fees'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualContainerFees::class),
            date: OzonDtoValue::string($payload['date'] ?? null),
            itemFees: OzonDtoValue::object($payload['item_fees'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualItemFees::class),
            nonItemFee: OzonDtoValue::object($payload['non_item_fee'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualNonItemFee::class),
            posting: OzonDtoValue::object($payload['posting'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualPosting::class),
            totalAmount: OzonDtoValue::object($payload['total_amount'] ?? null, MoneyMoneyTotalAmount::class),
            accrualId: OzonDtoValue::int($payload['accrual_id'] ?? null),
            unitNumber: OzonDtoValue::string($payload['unit_number'] ?? null),
            extra: OzonDtoValue::extra($payload, ['accrued_category', 'container_fees', 'date', 'item_fees', 'non_item_fee', 'posting', 'total_amount', 'accrual_id', 'unit_number']),
        );
    }
}
