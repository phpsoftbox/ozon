<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsListResponsePostingsTariffication implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MoneyMoneyCurrentTariffCharge $currentTariffCharge,
        public ?MoneyMoneyCurrentTariffMinCharge $currentTariffMinCharge,
        public ?float $currentTariffRate,
        public ?string $currentTariffType,
        public ?MoneyMoneyNextTariffCharge $nextTariffCharge,
        public ?MoneyMoneyNextTariffMinCharge $nextTariffMinCharge,
        public ?float $nextTariffRate,
        public ?string $nextTariffStartsAt,
        public ?string $nextTariffType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            currentTariffCharge: OzonDtoValue::object($payload['current_tariff_charge'] ?? null, MoneyMoneyCurrentTariffCharge::class),
            currentTariffMinCharge: OzonDtoValue::object($payload['current_tariff_min_charge'] ?? null, MoneyMoneyCurrentTariffMinCharge::class),
            currentTariffRate: OzonDtoValue::float($payload['current_tariff_rate'] ?? null),
            currentTariffType: OzonDtoValue::string($payload['current_tariff_type'] ?? null),
            nextTariffCharge: OzonDtoValue::object($payload['next_tariff_charge'] ?? null, MoneyMoneyNextTariffCharge::class),
            nextTariffMinCharge: OzonDtoValue::object($payload['next_tariff_min_charge'] ?? null, MoneyMoneyNextTariffMinCharge::class),
            nextTariffRate: OzonDtoValue::float($payload['next_tariff_rate'] ?? null),
            nextTariffStartsAt: OzonDtoValue::string($payload['next_tariff_starts_at'] ?? null),
            nextTariffType: OzonDtoValue::string($payload['next_tariff_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['current_tariff_charge', 'current_tariff_min_charge', 'current_tariff_rate', 'current_tariff_type', 'next_tariff_charge', 'next_tariff_min_charge', 'next_tariff_rate', 'next_tariff_starts_at', 'next_tariff_type']),
        );
    }
}
