<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Polygon;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PolygonListResponse implements OzonDtoInterface
{
    /**
     * @param list<PolygonListResponsePolygon> $polygons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $polygons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            polygons: OzonDtoValue::objectList($payload['polygons'] ?? null, PolygonListResponsePolygon::class),
            extra: OzonDtoValue::extra($payload, ['polygons']),
        );
    }
}
