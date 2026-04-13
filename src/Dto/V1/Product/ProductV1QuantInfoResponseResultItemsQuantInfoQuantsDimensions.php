<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1QuantInfoResponseResultItemsQuantInfoQuantsDimensions implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $depth,
        public ?int $height,
        public ?int $weight,
        public ?int $width,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            depth: OzonDtoValue::int($payload['depth'] ?? null),
            height: OzonDtoValue::int($payload['height'] ?? null),
            weight: OzonDtoValue::int($payload['weight'] ?? null),
            width: OzonDtoValue::int($payload['width'] ?? null),
            extra: OzonDtoValue::extra($payload, ['depth', 'height', 'weight', 'width']),
        );
    }
}
