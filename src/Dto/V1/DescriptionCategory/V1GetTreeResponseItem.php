<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DescriptionCategory;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetTreeResponseItem implements OzonDtoInterface
{
    /**
     * @param list<V1GetTreeResponseItem> $children
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $descriptionCategoryId,
        public ?string $categoryName,
        public array $children,
        public ?bool $disabled,
        public ?int $typeId,
        public ?string $typeName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            descriptionCategoryId: OzonDtoValue::int($payload['description_category_id'] ?? null),
            categoryName: OzonDtoValue::string($payload['category_name'] ?? null),
            children: OzonDtoValue::objectList($payload['children'] ?? null, V1GetTreeResponseItem::class),
            disabled: OzonDtoValue::bool($payload['disabled'] ?? null),
            typeId: OzonDtoValue::int($payload['type_id'] ?? null),
            typeName: OzonDtoValue::string($payload['type_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['description_category_id', 'category_name', 'children', 'disabled', 'type_id', 'type_name']),
        );
    }
}
