<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseRfbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseRfbsReturnPointListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1WarehouseRfbsReturnPointListResponsePoints> $points
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
            points: OzonDtoValue::objectList($payload['points'] ?? null, V1WarehouseRfbsReturnPointListResponsePoints::class),
            extra: OzonDtoValue::extra($payload, ['points']),
        );
    }
}
