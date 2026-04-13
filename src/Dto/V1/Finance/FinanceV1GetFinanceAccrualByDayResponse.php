<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualByDayResponse implements OzonDtoInterface
{
    /**
     * @param list<FinanceV1GetFinanceAccrualByDayResponseAccrual> $accruals
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $accruals,
        public ?string $lastId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accruals: OzonDtoValue::objectList($payload['accruals'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrual::class),
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['accruals', 'last_id']),
        );
    }
}
