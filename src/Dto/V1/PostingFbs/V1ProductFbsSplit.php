<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductFbsSplit implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $productId,
        public ?int $quantity,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            extra: OzonDtoValue::extra($payload, ['product_id', 'quantity']),
        );
    }
}
