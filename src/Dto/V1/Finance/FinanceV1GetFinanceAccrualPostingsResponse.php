<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualPostingsResponse implements OzonDtoInterface
{
    /**
     * @param list<FinanceV1GetFinanceAccrualPostingsResponsePostingAccruals> $postingAccruals
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $postingAccruals,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingAccruals: OzonDtoValue::objectList($payload['posting_accruals'] ?? null, FinanceV1GetFinanceAccrualPostingsResponsePostingAccruals::class),
            extra: OzonDtoValue::extra($payload, ['posting_accruals']),
        );
    }
}
