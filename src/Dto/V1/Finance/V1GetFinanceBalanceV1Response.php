<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetFinanceBalanceV1Response implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetFinanceBalanceV1ResponseCashflows $cashflows,
        public ?GetFinanceBalanceV1ResponseTotal $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cashflows: OzonDtoValue::object($payload['cashflows'] ?? null, GetFinanceBalanceV1ResponseCashflows::class),
            total: OzonDtoValue::object($payload['total'] ?? null, GetFinanceBalanceV1ResponseTotal::class),
            extra: OzonDtoValue::extra($payload, ['cashflows', 'total']),
        );
    }
}
