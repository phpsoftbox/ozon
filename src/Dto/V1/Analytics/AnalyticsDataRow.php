<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsDataRow implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsDataRowDimension> $dimensions
     * @param list<float> $metrics
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $dimensions,
        public array $metrics,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dimensions: OzonDtoValue::objectList($payload['dimensions'] ?? null, AnalyticsDataRowDimension::class),
            metrics: OzonDtoValue::array($payload['metrics'] ?? null),
            extra: OzonDtoValue::extra($payload, ['dimensions', 'metrics']),
        );
    }
}
