<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetProductPlacementZoneInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<GetProductPlacementZoneInfoResponseProductPlacement> $productsPlacement
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $productsPlacement,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productsPlacement: OzonDtoValue::objectList($payload['products_placement'] ?? null, GetProductPlacementZoneInfoResponseProductPlacement::class),
            extra: OzonDtoValue::extra($payload, ['products_placement']),
        );
    }
}
