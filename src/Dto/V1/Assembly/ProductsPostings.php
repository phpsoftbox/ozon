<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Assembly;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductsPostings implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $postingNumber,
        public ?int $quantity,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            extra: OzonDtoValue::extra($payload, ['posting_number', 'quantity']),
        );
    }
}
