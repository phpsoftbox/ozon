<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductCertificationListResponseCertification implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $categoryName,
        public ?bool $isRequired,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            categoryName: OzonDtoValue::string($payload['category_name'] ?? null),
            isRequired: OzonDtoValue::bool($payload['is_required'] ?? null),
            extra: OzonDtoValue::extra($payload, ['category_name', 'is_required']),
        );
    }
}
