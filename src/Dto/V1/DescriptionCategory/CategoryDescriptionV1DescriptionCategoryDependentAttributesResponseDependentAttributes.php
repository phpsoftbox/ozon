<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DescriptionCategory;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CategoryDescriptionV1DescriptionCategoryDependentAttributesResponseDependentAttributes implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $childAttributeId,
        public ?int $parentAttributeId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            childAttributeId: OzonDtoValue::int($payload['child_attribute_id'] ?? null),
            parentAttributeId: OzonDtoValue::int($payload['parent_attribute_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['child_attribute_id', 'parent_attribute_id']),
        );
    }
}
