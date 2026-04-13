<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SellerActions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ParameterDiscountLevels implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $discountValue,
        public ?float $orderAmount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            discountValue: OzonDtoValue::float($payload['discount_value'] ?? null),
            orderAmount: OzonDtoValue::float($payload['order_amount'] ?? null),
            extra: OzonDtoValue::extra($payload, ['discount_value', 'order_amount']),
        );
    }
}
