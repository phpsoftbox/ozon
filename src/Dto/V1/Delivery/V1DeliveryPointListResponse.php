<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DeliveryPointListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1DeliveryPointListResponsePoint> $points
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
            points: OzonDtoValue::objectList($payload['points'] ?? null, V1DeliveryPointListResponsePoint::class),
            extra: OzonDtoValue::extra($payload, ['points']),
        );
    }
}
