<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponseError implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $attributeId,
        public ?string $code,
        public ?string $field,
        public ?ErrorErrorLevel $level,
        public ?string $state,
        public ?ErrorHumanTexts $texts,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            attributeId: OzonDtoValue::int($payload['attribute_id'] ?? null),
            code: OzonDtoValue::string($payload['code'] ?? null),
            field: OzonDtoValue::string($payload['field'] ?? null),
            level: OzonDtoValue::object($payload['level'] ?? null, ErrorErrorLevel::class),
            state: OzonDtoValue::string($payload['state'] ?? null),
            texts: OzonDtoValue::object($payload['texts'] ?? null, ErrorHumanTexts::class),
            extra: OzonDtoValue::extra($payload, ['attribute_id', 'code', 'field', 'level', 'state', 'texts']),
        );
    }
}
