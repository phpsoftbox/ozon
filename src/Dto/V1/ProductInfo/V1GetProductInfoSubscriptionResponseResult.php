<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetProductInfoSubscriptionResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $count,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            count: OzonDtoValue::int($payload['count'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['count', 'sku']),
        );
    }
}
