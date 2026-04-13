<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProductDelivery implements OzonDtoInterface
{
    /**
     * @param list<FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProductDeliveryService> $services
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $services,
        public ?MoneyMoneyTotalAccrued $totalAccrued,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            services: OzonDtoValue::objectList($payload['services'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProductDeliveryService::class),
            totalAccrued: OzonDtoValue::object($payload['total_accrued'] ?? null, MoneyMoneyTotalAccrued::class),
            extra: OzonDtoValue::extra($payload, ['services', 'total_accrued']),
        );
    }
}
