<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ItemError implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?string $message,
        public ?string $state,
        public ?string $level,
        public ?string $description,
        public ?string $field,
        public ?int $attributeId,
        public ?string $attributeName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            message: OzonDtoValue::string($payload['message'] ?? null),
            state: OzonDtoValue::string($payload['state'] ?? null),
            level: OzonDtoValue::string($payload['level'] ?? null),
            description: OzonDtoValue::string($payload['description'] ?? null),
            field: OzonDtoValue::string($payload['field'] ?? null),
            attributeId: OzonDtoValue::int($payload['attribute_id'] ?? null),
            attributeName: OzonDtoValue::string($payload['attribute_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'message', 'state', 'level', 'description', 'field', 'attribute_id', 'attribute_name']),
        );
    }
}
