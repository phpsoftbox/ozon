<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsGetDataResponseResult implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsDataRow> $data
     * @param list<float> $totals
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $data,
        public array $totals,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            data: OzonDtoValue::objectList($payload['data'] ?? null, AnalyticsDataRow::class),
            totals: OzonDtoValue::array($payload['totals'] ?? null),
            extra: OzonDtoValue::extra($payload, ['data', 'totals']),
        );
    }
}
