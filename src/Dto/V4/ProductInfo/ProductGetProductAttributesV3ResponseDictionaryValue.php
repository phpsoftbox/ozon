<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductGetProductAttributesV3ResponseDictionaryValue implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $dictionaryValueId,
        public ?string $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dictionaryValueId: OzonDtoValue::int($payload['dictionary_value_id'] ?? null),
            value: OzonDtoValue::string($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['dictionary_value_id', 'value']),
        );
    }
}
