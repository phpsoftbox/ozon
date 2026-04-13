<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemMetricsOverpayment implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $delta,
        public ?float $nonLocalDelivery,
        public ?float $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            delta: OzonDtoValue::float($payload['delta'] ?? null),
            nonLocalDelivery: OzonDtoValue::float($payload['non_local_delivery'] ?? null),
            total: OzonDtoValue::float($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delta', 'non_local_delivery', 'total']),
        );
    }
}
