<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsListResponsePostingsTarifficationStep implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyCurrentTariffMinCharge $minCharge,
        public ?MoneyMoneyCurrentTariffCharge $tariffCharge,
        public ?string $tariffDeadlineAt,
        public ?float $tariffRate,
        public ?string $tariffType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            minCharge: OzonDtoValue::object($payload['min_charge'] ?? null, MoneyMoneyCurrentTariffMinCharge::class),
            tariffCharge: OzonDtoValue::object($payload['tariff_charge'] ?? null, MoneyMoneyCurrentTariffCharge::class),
            tariffDeadlineAt: OzonDtoValue::string($payload['tariff_deadline_at'] ?? null),
            tariffRate: OzonDtoValue::float($payload['tariff_rate'] ?? null),
            tariffType: OzonDtoValue::string($payload['tariff_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['min_charge', 'tariff_charge', 'tariff_deadline_at', 'tariff_rate', 'tariff_type']),
        );
    }
}
