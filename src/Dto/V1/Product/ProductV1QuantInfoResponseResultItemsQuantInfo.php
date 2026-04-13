<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1QuantInfoResponseResultItemsQuantInfo implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $quants
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $quants,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            quants: OzonDtoValue::array($payload['quants'] ?? null),
            extra: OzonDtoValue::extra($payload, ['quants']),
        );
    }
}
