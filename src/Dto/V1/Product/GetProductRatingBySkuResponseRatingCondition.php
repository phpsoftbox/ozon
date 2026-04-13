<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductRatingBySkuResponseRatingCondition implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $cost,
        public ?string $description,
        public ?bool $fulfilled,
        public ?string $key,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cost: OzonDtoValue::float($payload['cost'] ?? null),
            description: OzonDtoValue::string($payload['description'] ?? null),
            fulfilled: OzonDtoValue::bool($payload['fulfilled'] ?? null),
            key: OzonDtoValue::string($payload['key'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cost', 'description', 'fulfilled', 'key']),
        );
    }
}
