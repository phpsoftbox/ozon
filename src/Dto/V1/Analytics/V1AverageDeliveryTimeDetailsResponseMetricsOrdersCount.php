<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeDetailsResponseMetricsOrdersCount implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1AverageDeliveryTimeDetailsResponseMetricsOrdersCountValueFast $fast,
        public ?V1AverageDeliveryTimeDetailsResponseMetricsOrdersCountValueLong $long,
        public ?V1AverageDeliveryTimeDetailsResponseMetricsOrdersCountValueMedium $medium,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fast: OzonDtoValue::object($payload['fast'] ?? null, V1AverageDeliveryTimeDetailsResponseMetricsOrdersCountValueFast::class),
            long: OzonDtoValue::object($payload['long'] ?? null, V1AverageDeliveryTimeDetailsResponseMetricsOrdersCountValueLong::class),
            medium: OzonDtoValue::object($payload['medium'] ?? null, V1AverageDeliveryTimeDetailsResponseMetricsOrdersCountValueMedium::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['fast', 'long', 'medium', 'total']),
        );
    }
}
