<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProduct implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProductCommission $commission,
        public ?FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProductDelivery $delivery,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            commission: OzonDtoValue::object($payload['commission'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProductCommission::class),
            delivery: OzonDtoValue::object($payload['delivery'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProductDelivery::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['commission', 'delivery', 'sku']),
        );
    }
}
