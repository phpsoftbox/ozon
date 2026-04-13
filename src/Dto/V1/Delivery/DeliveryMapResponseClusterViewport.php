<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMapResponseClusterViewport implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DeliveryMapResponseClusterCoordinatesLeft $leftBottom,
        public ?DeliveryMapResponseClusterCoordinatesRight $rightTop,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            leftBottom: OzonDtoValue::object($payload['left_bottom'] ?? null, DeliveryMapResponseClusterCoordinatesLeft::class),
            rightTop: OzonDtoValue::object($payload['right_top'] ?? null, DeliveryMapResponseClusterCoordinatesRight::class),
            extra: OzonDtoValue::extra($payload, ['left_bottom', 'right_top']),
        );
    }
}
