<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductGetProductAttributesV4ResponseAttribute implements OzonDtoInterface
{
    /**
     * @param list<ProductGetProductAttributesV3ResponseDictionaryValue> $values
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?int $complexId,
        public array $values,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            complexId: OzonDtoValue::int($payload['complex_id'] ?? null),
            values: OzonDtoValue::objectList($payload['values'] ?? null, ProductGetProductAttributesV3ResponseDictionaryValue::class),
            extra: OzonDtoValue::extra($payload, ['id', 'complex_id', 'values']),
        );
    }
}
