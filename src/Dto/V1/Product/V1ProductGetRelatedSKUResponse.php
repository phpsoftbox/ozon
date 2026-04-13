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
     * @param array<array-key, mixed> $items
     * @param array<array-key, mixed> $errors
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
            items: OzonDtoValue::array($payload['items'] ?? null),
            errors: OzonDtoValue::array($payload['errors'] ?? null),
            extra: OzonDtoValue::extra($payload, ['items', 'errors']),
        );
    }
}
