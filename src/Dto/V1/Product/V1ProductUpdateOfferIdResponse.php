<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductUpdateOfferIdResponse implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::array($payload['errors'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors']),
        );
    }
}
