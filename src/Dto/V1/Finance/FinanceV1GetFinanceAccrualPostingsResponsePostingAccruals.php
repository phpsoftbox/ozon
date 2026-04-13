<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualPostingsResponsePostingAccruals implements OzonDtoInterface
{
    /**
     * @param list<FinanceV1GetFinanceAccrualPostingsResponsePostingAccrualsAccrual> $accruals
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $accruals,
        public ?string $postingNumber,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accruals: OzonDtoValue::objectList($payload['accruals'] ?? null, FinanceV1GetFinanceAccrualPostingsResponsePostingAccrualsAccrual::class),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            extra: OzonDtoValue::extra($payload, ['accruals', 'posting_number']),
        );
    }
}
