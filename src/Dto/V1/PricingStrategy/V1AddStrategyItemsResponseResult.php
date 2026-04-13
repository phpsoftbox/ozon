<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AddStrategyItemsResponseResult implements OzonDtoInterface
{
    /**
     * @param list<AddStrategyItemsResponseError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?int $failedProductCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, AddStrategyItemsResponseError::class),
            failedProductCount: OzonDtoValue::int($payload['failed_product_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors', 'failed_product_count']),
        );
    }
}
