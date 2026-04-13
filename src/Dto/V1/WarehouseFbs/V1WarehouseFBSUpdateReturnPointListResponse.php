<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFBSUpdateReturnPointListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1WarehouseFBSUpdateReturnPointListResponseReturnPoint> $points
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public ?bool $isSelectedPointAvailable,
        public ?int $lastId,
        public array $points,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            isSelectedPointAvailable: OzonDtoValue::bool($payload['is_selected_point_available'] ?? null),
            lastId: OzonDtoValue::int($payload['last_id'] ?? null),
            points: OzonDtoValue::objectList($payload['points'] ?? null, V1WarehouseFBSUpdateReturnPointListResponseReturnPoint::class),
            extra: OzonDtoValue::extra($payload, ['has_next', 'is_selected_point_available', 'last_id', 'points']),
        );
    }
}
