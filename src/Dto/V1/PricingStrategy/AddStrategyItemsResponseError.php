<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AddStrategyItemsResponseError implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?string $error,
        public ?int $productId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            error: OzonDtoValue::string($payload['error'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'error', 'product_id']),
        );
    }
}
