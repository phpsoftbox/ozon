<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AverageDeliveryTimeSummaryResponseTariff implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $fee,
        public ?int $start,
        public ?AverageDeliveryTimeSummaryResponseTariffStatus $tariffStatus,
        public ?float $tariffValue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fee: OzonDtoValue::float($payload['fee'] ?? null),
            start: OzonDtoValue::int($payload['start'] ?? null),
            tariffStatus: OzonDtoValue::object($payload['tariff_status'] ?? null, AverageDeliveryTimeSummaryResponseTariffStatus::class),
            tariffValue: OzonDtoValue::float($payload['tariff_value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['fee', 'start', 'tariff_status', 'tariff_value']),
        );
    }
}
