<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DescriptionCategory;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetAttributesResponseAttribute implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $categoryDependent,
        public ?string $description,
        public ?int $dictionaryId,
        public ?int $groupId,
        public ?string $groupName,
        public ?int $id,
        public ?bool $isAspect,
        public ?bool $isCollection,
        public ?bool $isRequired,
        public ?string $name,
        public ?string $type,
        public ?int $attributeComplexId,
        public ?int $maxValueCount,
        public ?bool $complexIsCollection,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            categoryDependent: OzonDtoValue::bool($payload['category_dependent'] ?? null),
            description: OzonDtoValue::string($payload['description'] ?? null),
            dictionaryId: OzonDtoValue::int($payload['dictionary_id'] ?? null),
            groupId: OzonDtoValue::int($payload['group_id'] ?? null),
            groupName: OzonDtoValue::string($payload['group_name'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            isAspect: OzonDtoValue::bool($payload['is_aspect'] ?? null),
            isCollection: OzonDtoValue::bool($payload['is_collection'] ?? null),
            isRequired: OzonDtoValue::bool($payload['is_required'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            type: OzonDtoValue::string($payload['type'] ?? null),
            attributeComplexId: OzonDtoValue::int($payload['attribute_complex_id'] ?? null),
            maxValueCount: OzonDtoValue::int($payload['max_value_count'] ?? null),
            complexIsCollection: OzonDtoValue::bool($payload['complex_is_collection'] ?? null),
            extra: OzonDtoValue::extra($payload, ['category_dependent', 'description', 'dictionary_id', 'group_id', 'group_name', 'id', 'is_aspect', 'is_collection', 'is_required', 'name', 'type', 'attribute_complex_id', 'max_value_count', 'complex_is_collection']),
        );
    }
}
