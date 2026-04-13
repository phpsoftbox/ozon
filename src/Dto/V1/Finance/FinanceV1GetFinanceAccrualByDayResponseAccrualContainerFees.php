<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualByDayResponseAccrualContainerFees implements OzonDtoInterface
{
    /**
     * @param list<FinanceV1GetFinanceAccrualByDayResponseAccrualContainerFeesContainerFee> $fees
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $fees,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fees: OzonDtoValue::objectList($payload['fees'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualContainerFeesContainerFee::class),
            extra: OzonDtoValue::extra($payload, ['fees']),
        );
    }
}
