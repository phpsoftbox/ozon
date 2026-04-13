<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualTypesResponse implements OzonDtoInterface
{
    /**
     * @param list<FinanceV1GetFinanceAccrualTypesResponseAccrualType> $accrualTypes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $accrualTypes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accrualTypes: OzonDtoValue::objectList($payload['accrual_types'] ?? null, FinanceV1GetFinanceAccrualTypesResponseAccrualType::class),
            extra: OzonDtoValue::extra($payload, ['accrual_types']),
        );
    }
}
