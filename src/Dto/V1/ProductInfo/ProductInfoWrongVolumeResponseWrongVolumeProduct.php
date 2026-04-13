<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductInfoWrongVolumeResponseWrongVolumeProduct implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $height,
        public ?int $length,
        public ?string $name,
        public ?string $offerId,
        public ?int $productId,
        public ?int $sku,
        public ?int $weight,
        public ?int $width,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            height: OzonDtoValue::int($payload['height'] ?? null),
            length: OzonDtoValue::int($payload['length'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            weight: OzonDtoValue::int($payload['weight'] ?? null),
            width: OzonDtoValue::int($payload['width'] ?? null),
            extra: OzonDtoValue::extra($payload, ['height', 'length', 'name', 'offer_id', 'product_id', 'sku', 'weight', 'width']),
        );
    }
}
