<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualByDayResponseAccrualContainerFeesContainerFee implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyAccrued $accrued,
        public ?int $typeId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accrued: OzonDtoValue::object($payload['accrued'] ?? null, MoneyMoneyAccrued::class),
            typeId: OzonDtoValue::int($payload['type_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['accrued', 'type_id']),
        );
    }
}
