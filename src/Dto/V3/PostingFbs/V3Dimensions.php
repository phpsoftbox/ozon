<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3Dimensions implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $height,
        public ?string $length,
        public ?string $weight,
        public ?string $width,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            height: OzonDtoValue::string($payload['height'] ?? null),
            length: OzonDtoValue::string($payload['length'] ?? null),
            weight: OzonDtoValue::string($payload['weight'] ?? null),
            width: OzonDtoValue::string($payload['width'] ?? null),
            extra: OzonDtoValue::extra($payload, ['height', 'length', 'weight', 'width']),
        );
    }
}
