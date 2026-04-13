<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetProductStairwayDiscountByQuantityResponse implements OzonDtoInterface
{
    /**
     * @param list<V1GetProductStairwayDiscountByQuantityResponseStairways> $stairways
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $stairways,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            stairways: OzonDtoValue::objectList($payload['stairways'] ?? null, V1GetProductStairwayDiscountByQuantityResponseStairways::class),
            extra: OzonDtoValue::extra($payload, ['stairways']),
        );
    }
}
