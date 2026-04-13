<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\ProductPictures;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2ProductInfoPicturesResponseItem implements OzonDtoInterface
{
    /**
     * @param list<string> $primaryPhoto
     * @param list<string> $photo
     * @param list<string> $colorPhoto
     * @param list<string> $photo360
     * @param list<V2ProductInfoPicturesResponseError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $productId,
        public array $primaryPhoto,
        public array $photo,
        public array $colorPhoto,
        public array $photo360,
        public array $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            primaryPhoto: OzonDtoValue::array($payload['primary_photo'] ?? null),
            photo: OzonDtoValue::array($payload['photo'] ?? null),
            colorPhoto: OzonDtoValue::array($payload['color_photo'] ?? null),
            photo360: OzonDtoValue::array($payload['photo_360'] ?? null),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V2ProductInfoPicturesResponseError::class),
            extra: OzonDtoValue::extra($payload, ['product_id', 'primary_photo', 'photo', 'color_photo', 'photo_360', 'errors']),
        );
    }
}
