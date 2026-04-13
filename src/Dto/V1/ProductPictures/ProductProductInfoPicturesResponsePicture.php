<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductPictures;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductProductInfoPicturesResponsePicture implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $is360,
        public ?bool $isColor,
        public ?bool $isPrimary,
        public ?int $productId,
        public ?string $state,
        public ?string $url,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            is360: OzonDtoValue::bool($payload['is_360'] ?? null),
            isColor: OzonDtoValue::bool($payload['is_color'] ?? null),
            isPrimary: OzonDtoValue::bool($payload['is_primary'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            state: OzonDtoValue::string($payload['state'] ?? null),
            url: OzonDtoValue::string($payload['url'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_360', 'is_color', 'is_primary', 'product_id', 'state', 'url']),
        );
    }
}
