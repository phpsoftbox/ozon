<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetStrategyItemsResponseResult implements OzonDtoInterface
{
    /**
     * @param list<string> $productId
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $productId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productId: OzonDtoValue::array($payload['product_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['product_id']),
        );
    }
}
