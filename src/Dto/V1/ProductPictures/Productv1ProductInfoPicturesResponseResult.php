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
     * @param array<array-key, mixed> $pictures
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
            pictures: OzonDtoValue::array($payload['pictures'] ?? null),
            extra: OzonDtoValue::extra($payload, ['pictures']),
        );
    }
}
