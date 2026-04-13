<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductRatingBySkuResponseProductRating implements OzonDtoInterface
{
    /**
     * @param list<GetProductRatingBySkuResponseRatingGroup> $groups
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $sku,
        public ?float $rating,
        public array $groups,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            rating: OzonDtoValue::float($payload['rating'] ?? null),
            groups: OzonDtoValue::objectList($payload['groups'] ?? null, GetProductRatingBySkuResponseRatingGroup::class),
            extra: OzonDtoValue::extra($payload, ['sku', 'rating', 'groups']),
        );
    }
}
