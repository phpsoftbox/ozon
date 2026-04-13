<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\ProductPictures;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2ProductInfoPicturesResponse implements OzonDtoInterface
{
    /**
     * @param list<V2ProductInfoPicturesResponseItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: OzonDtoValue::objectList($payload['items'] ?? null, V2ProductInfoPicturesResponseItem::class),
            extra: OzonDtoValue::extra($payload, ['items']),
        );
    }
}
