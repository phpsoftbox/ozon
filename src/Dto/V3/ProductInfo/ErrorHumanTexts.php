<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ErrorHumanTexts implements OzonDtoInterface
{
    /**
     * @param list<HumanTextsParam> $params
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $attributeName,
        public ?string $description,
        public ?string $hintCode,
        public ?string $message,
        public array $params,
        public ?string $shortDescription,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            attributeName: OzonDtoValue::string($payload['attribute_name'] ?? null),
            description: OzonDtoValue::string($payload['description'] ?? null),
            hintCode: OzonDtoValue::string($payload['hint_code'] ?? null),
            message: OzonDtoValue::string($payload['message'] ?? null),
            params: OzonDtoValue::objectList($payload['params'] ?? null, HumanTextsParam::class),
            shortDescription: OzonDtoValue::string($payload['short_description'] ?? null),
            extra: OzonDtoValue::extra($payload, ['attribute_name', 'description', 'hint_code', 'message', 'params', 'short_description']),
        );
    }
}
