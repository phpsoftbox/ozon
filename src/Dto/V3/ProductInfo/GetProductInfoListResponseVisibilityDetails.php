<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponseVisibilityDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasPrice,
        public ?bool $hasStock,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasPrice: OzonDtoValue::bool($payload['has_price'] ?? null),
            hasStock: OzonDtoValue::bool($payload['has_stock'] ?? null),
            extra: OzonDtoValue::extra($payload, ['has_price', 'has_stock']),
        );
    }
}
