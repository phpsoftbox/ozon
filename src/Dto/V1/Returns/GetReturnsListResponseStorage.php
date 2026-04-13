<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetReturnsListResponseStorage implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SellerReturnsv1MoneyStorage $sum,
        public ?string $tarifficationFirstDate,
        public ?string $tarifficationStartDate,
        public ?string $arrivedMoment,
        public ?int $days,
        public ?SellerReturnsv1MoneyUtilization $utilizationSum,
        public ?string $utilizationForecastDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            sum: OzonDtoValue::object($payload['sum'] ?? null, SellerReturnsv1MoneyStorage::class),
            tarifficationFirstDate: OzonDtoValue::string($payload['tariffication_first_date'] ?? null),
            tarifficationStartDate: OzonDtoValue::string($payload['tariffication_start_date'] ?? null),
            arrivedMoment: OzonDtoValue::string($payload['arrived_moment'] ?? null),
            days: OzonDtoValue::int($payload['days'] ?? null),
            utilizationSum: OzonDtoValue::object($payload['utilization_sum'] ?? null, SellerReturnsv1MoneyUtilization::class),
            utilizationForecastDate: OzonDtoValue::string($payload['utilization_forecast_date'] ?? null),
            extra: OzonDtoValue::extra($payload, ['sum', 'tariffication_first_date', 'tariffication_start_date', 'arrived_moment', 'days', 'utilization_sum', 'utilization_forecast_date']),
        );
    }
}
