<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ListDropOffPointsForCreateFBSWarehouseResponse implements OzonDtoInterface
{
    /**
     * @param list<ListDropOffPointsForCreateFBSWarehouseResponseDropOffPoint> $points
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $points,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            points: OzonDtoValue::objectList($payload['points'] ?? null, ListDropOffPointsForCreateFBSWarehouseResponseDropOffPoint::class),
            extra: OzonDtoValue::extra($payload, ['points']),
        );
    }
}
