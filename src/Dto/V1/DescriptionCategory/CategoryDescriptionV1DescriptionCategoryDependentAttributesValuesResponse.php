<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DescriptionCategory;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CategoryDescriptionV1DescriptionCategoryDependentAttributesValuesResponse implements OzonDtoInterface
{
    /**
     * @param list<CategoryDescriptionV1DescriptionCategoryDependentAttributesValuesResponseDependentAttributesValuesResult> $result
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public array $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            result: OzonDtoValue::objectList($payload['result'] ?? null, CategoryDescriptionV1DescriptionCategoryDependentAttributesValuesResponseDependentAttributesValuesResult::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'result']),
        );
    }
}
