<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DescriptionCategory;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SearchAttributeValuesResponseValue implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $info,
        public ?string $picture,
        public ?string $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            info: OzonDtoValue::string($payload['info'] ?? null),
            picture: OzonDtoValue::string($payload['picture'] ?? null),
            value: OzonDtoValue::string($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'info', 'picture', 'value']),
        );
    }
}
