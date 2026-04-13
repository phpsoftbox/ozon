<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeSummaryResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $averageDeliveryTime,
        public ?AverageDeliveryTimeSummaryResponseTariff $currentTariff,
        public ?float $lostProfit,
        public ?int $perfectDeliveryTime,
        public ?string $updatedAt,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            averageDeliveryTime: OzonDtoValue::int($payload['average_delivery_time'] ?? null),
            currentTariff: OzonDtoValue::object($payload['current_tariff'] ?? null, AverageDeliveryTimeSummaryResponseTariff::class),
            lostProfit: OzonDtoValue::float($payload['lost_profit'] ?? null),
            perfectDeliveryTime: OzonDtoValue::int($payload['perfect_delivery_time'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            extra: OzonDtoValue::extra($payload, ['average_delivery_time', 'current_tariff', 'lost_profit', 'perfect_delivery_time', 'updated_at']),
        );
    }
}
