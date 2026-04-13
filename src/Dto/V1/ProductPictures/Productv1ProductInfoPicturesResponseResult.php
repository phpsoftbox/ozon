<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductPictures;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Productv1ProductInfoPicturesResponseResult implements OzonDtoInterface
{
    /**
     * @param list<ProductProductInfoPicturesResponsePicture> $pictures
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $pictures,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            pictures: OzonDtoValue::objectList($payload['pictures'] ?? null, ProductProductInfoPicturesResponsePicture::class),
            extra: OzonDtoValue::extra($payload, ['pictures']),
        );
    }
}
