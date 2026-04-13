<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetFinanceBalanceV1ResponseSalesDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1GetFinanceBalanceV1ResponsePartnerMoney $partnerPrograms,
        public ?string $pointsForDiscounts,
        public ?V1GetFinanceBalanceV1ResponseRevenueMoney $revenue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            partnerPrograms: OzonDtoValue::object($payload['partner_programs'] ?? null, V1GetFinanceBalanceV1ResponsePartnerMoney::class),
            pointsForDiscounts: OzonDtoValue::string($payload['points_for_discounts'] ?? null),
            revenue: OzonDtoValue::object($payload['revenue'] ?? null, V1GetFinanceBalanceV1ResponseRevenueMoney::class),
            extra: OzonDtoValue::extra($payload, ['partner_programs', 'points_for_discounts', 'revenue']),
        );
    }
}
