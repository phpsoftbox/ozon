<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetProductStairwayDiscountByQuantityResponseStairwaysStairwayStep implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $discount,
        public ?int $quantity,
        public ?int $step,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            discount: OzonDtoValue::int($payload['discount'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            step: OzonDtoValue::int($payload['step'] ?? null),
            extra: OzonDtoValue::extra($payload, ['discount', 'quantity', 'step']),
        );
    }
}
