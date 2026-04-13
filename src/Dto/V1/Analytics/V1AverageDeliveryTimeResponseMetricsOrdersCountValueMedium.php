<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeResponseMetricsOrdersCountValueMedium implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $percent,
        public ?int $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            percent: OzonDtoValue::int($payload['percent'] ?? null),
            value: OzonDtoValue::int($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['percent', 'value']),
        );
    }
}
