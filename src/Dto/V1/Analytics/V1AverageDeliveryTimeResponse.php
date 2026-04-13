<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeResponse implements OzonDtoInterface
{
    /**
     * @param list<V1AverageDeliveryTimeResponseData> $data
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $data,
        public ?AverageDeliveryTimeResponseTotal $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            data: OzonDtoValue::objectList($payload['data'] ?? null, V1AverageDeliveryTimeResponseData::class),
            total: OzonDtoValue::object($payload['total'] ?? null, AverageDeliveryTimeResponseTotal::class),
            extra: OzonDtoValue::extra($payload, ['data', 'total']),
        );
    }
}
