<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Polygon;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PolygonListResponsePolygon implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $coordinates,
        public ?int $polygonId,
        public ?int $time,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            coordinates: OzonDtoValue::string($payload['coordinates'] ?? null),
            polygonId: OzonDtoValue::int($payload['polygon_id'] ?? null),
            time: OzonDtoValue::int($payload['time'] ?? null),
            extra: OzonDtoValue::extra($payload, ['coordinates', 'polygon_id', 'time']),
        );
    }
}
