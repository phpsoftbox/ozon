<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductGetRelatedSKUResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $availability,
        public ?string $deletedAt,
        public ?string $deliverySchema,
        public ?int $productId,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availability: OzonDtoValue::string($payload['availability'] ?? null),
            deletedAt: OzonDtoValue::string($payload['deleted_at'] ?? null),
            deliverySchema: OzonDtoValue::string($payload['delivery_schema'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['availability', 'deleted_at', 'delivery_schema', 'product_id', 'sku']),
        );
    }
}
