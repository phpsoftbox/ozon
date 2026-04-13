<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductCertificationListResponseCertificationv2 implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $categoryId,
        public ?string $categoryName,
        public ?bool $isRequired,
        public ?int $typeId,
        public ?string $typeName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            categoryId: OzonDtoValue::int($payload['category_id'] ?? null),
            categoryName: OzonDtoValue::string($payload['category_name'] ?? null),
            isRequired: OzonDtoValue::bool($payload['is_required'] ?? null),
            typeId: OzonDtoValue::int($payload['type_id'] ?? null),
            typeName: OzonDtoValue::string($payload['type_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['category_id', 'category_name', 'is_required', 'type_id', 'type_name']),
        );
    }
}
