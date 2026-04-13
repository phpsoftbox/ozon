<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DescriptionCategory;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CategoryDescriptionV1DescriptionCategoryDependentAttributesValuesResponseDependentAttributesValuesResultChildrenValue implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $childValue,
        public ?int $childValueId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            childValue: OzonDtoValue::string($payload['child_value'] ?? null),
            childValueId: OzonDtoValue::int($payload['child_value_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['child_value', 'child_value_id']),
        );
    }
}
