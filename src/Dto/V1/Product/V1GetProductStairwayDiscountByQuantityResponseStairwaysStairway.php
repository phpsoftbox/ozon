<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetProductStairwayDiscountByQuantityResponseStairwaysStairway implements OzonDtoInterface
{
    /**
     * @param list<V1GetProductStairwayDiscountByQuantityResponseStairwaysStairwayStep> $steps
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $steps,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            steps: OzonDtoValue::objectList($payload['steps'] ?? null, V1GetProductStairwayDiscountByQuantityResponseStairwaysStairwayStep::class),
            extra: OzonDtoValue::extra($payload, ['steps']),
        );
    }
}
