<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SetProductStairwayDiscountByQuantityResponse implements OzonDtoInterface
{
    /**
     * @param list<V1SetProductStairwayDiscountByQuantityResponseError> $errors
     * @param list<V1SetProductStairwayDiscountByQuantityResponseError> $warnings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $accepted,
        public array $errors,
        public array $warnings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accepted: OzonDtoValue::bool($payload['accepted'] ?? null),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1SetProductStairwayDiscountByQuantityResponseError::class),
            warnings: OzonDtoValue::objectList($payload['warnings'] ?? null, V1SetProductStairwayDiscountByQuantityResponseError::class),
            extra: OzonDtoValue::extra($payload, ['accepted', 'errors', 'warnings']),
        );
    }
}
