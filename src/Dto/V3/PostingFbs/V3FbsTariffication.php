<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FbsTariffication implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $currentTariffRate,
        public ?string $currentTariffType,
        public ?string $currentTariffCharge,
        public ?string $currentTariffChargeCurrencyCode,
        public ?float $nextTariffRate,
        public ?string $nextTariffType,
        public ?string $nextTariffCharge,
        public ?string $nextTariffStartsAt,
        public ?string $nextTariffChargeCurrencyCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            currentTariffRate: OzonDtoValue::float($payload['current_tariff_rate'] ?? null),
            currentTariffType: OzonDtoValue::string($payload['current_tariff_type'] ?? null),
            currentTariffCharge: OzonDtoValue::string($payload['current_tariff_charge'] ?? null),
            currentTariffChargeCurrencyCode: OzonDtoValue::string($payload['current_tariff_charge_currency_code'] ?? null),
            nextTariffRate: OzonDtoValue::float($payload['next_tariff_rate'] ?? null),
            nextTariffType: OzonDtoValue::string($payload['next_tariff_type'] ?? null),
            nextTariffCharge: OzonDtoValue::string($payload['next_tariff_charge'] ?? null),
            nextTariffStartsAt: OzonDtoValue::string($payload['next_tariff_starts_at'] ?? null),
            nextTariffChargeCurrencyCode: OzonDtoValue::string($payload['next_tariff_charge_currency_code'] ?? null),
            extra: OzonDtoValue::extra($payload, ['current_tariff_rate', 'current_tariff_type', 'current_tariff_charge', 'current_tariff_charge_currency_code', 'next_tariff_rate', 'next_tariff_type', 'next_tariff_charge', 'next_tariff_starts_at', 'next_tariff_charge_currency_code']),
        );
    }
}
