<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AverageDeliveryTimeDetailsResponse implements OzonDtoInterface
{
    /**
     * @param list<V1AverageDeliveryTimeDetailsResponseData> $data
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $data,
        public ?int $totalRows,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            data: OzonDtoValue::objectList($payload['data'] ?? null, V1AverageDeliveryTimeDetailsResponseData::class),
            totalRows: OzonDtoValue::int($payload['total_rows'] ?? null),
            extra: OzonDtoValue::extra($payload, ['data', 'total_rows']),
        );
    }
}
