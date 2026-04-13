<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeResponseOrdersCount implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1AverageDeliveryTimeResponseOrdersCountValueFast $fast,
        public ?V1AverageDeliveryTimeResponseOrdersCountValueLong $long,
        public ?V1AverageDeliveryTimeResponseOrdersCountValueMedium $medium,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fast: OzonDtoValue::object($payload['fast'] ?? null, V1AverageDeliveryTimeResponseOrdersCountValueFast::class),
            long: OzonDtoValue::object($payload['long'] ?? null, V1AverageDeliveryTimeResponseOrdersCountValueLong::class),
            medium: OzonDtoValue::object($payload['medium'] ?? null, V1AverageDeliveryTimeResponseOrdersCountValueMedium::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['fast', 'long', 'medium', 'total']),
        );
    }
}
