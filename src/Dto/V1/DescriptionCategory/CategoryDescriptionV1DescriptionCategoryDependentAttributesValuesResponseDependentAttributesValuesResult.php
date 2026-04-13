<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DescriptionCategory;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CategoryDescriptionV1DescriptionCategoryDependentAttributesValuesResponseDependentAttributesValuesResult implements OzonDtoInterface
{
    /**
     * @param list<CategoryDescriptionV1DescriptionCategoryDependentAttributesValuesResponseDependentAttributesValuesResultChildrenValue> $children
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $children,
        public ?string $parentValue,
        public ?int $parentValueId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            children: OzonDtoValue::objectList($payload['children'] ?? null, CategoryDescriptionV1DescriptionCategoryDependentAttributesValuesResponseDependentAttributesValuesResultChildrenValue::class),
            parentValue: OzonDtoValue::string($payload['parent_value'] ?? null),
            parentValueId: OzonDtoValue::int($payload['parent_value_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['children', 'parent_value', 'parent_value_id']),
        );
    }
}
