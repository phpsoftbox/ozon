<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductRatingBySkuResponseRatingGroup implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $conditions
     * @param array<array-key, mixed> $improveAttributes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $conditions,
        public ?int $improveAtLeast,
        public array $improveAttributes,
        public ?string $key,
        public ?string $name,
        public ?float $rating,
        public ?float $weight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            conditions: OzonDtoValue::array($payload['conditions'] ?? null),
            improveAtLeast: OzonDtoValue::int($payload['improve_at_least'] ?? null),
            improveAttributes: OzonDtoValue::array($payload['improve_attributes'] ?? null),
            key: OzonDtoValue::string($payload['key'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            rating: OzonDtoValue::float($payload['rating'] ?? null),
            weight: OzonDtoValue::float($payload['weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['conditions', 'improve_at_least', 'improve_attributes', 'key', 'name', 'rating', 'weight']),
        );
    }
}
