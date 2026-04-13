<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductGetRelatedSKUResponse implements OzonDtoInterface
{
    /**
     * @param list<V1ProductGetRelatedSKUResponseItem> $items
     * @param list<V1ProductGetRelatedSKUResponseError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public array $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: OzonDtoValue::objectList($payload['items'] ?? null, V1ProductGetRelatedSKUResponseItem::class),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1ProductGetRelatedSKUResponseError::class),
            extra: OzonDtoValue::extra($payload, ['items', 'errors']),
        );
    }
}
