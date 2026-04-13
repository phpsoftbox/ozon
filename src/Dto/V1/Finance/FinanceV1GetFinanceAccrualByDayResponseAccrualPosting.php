<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceV1GetFinanceAccrualByDayResponseAccrualPosting implements OzonDtoInterface
{
    /**
     * @param list<FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $deliverySchema,
        public ?int $deliverySpeed,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliverySchema: OzonDtoValue::string($payload['delivery_schema'] ?? null),
            deliverySpeed: OzonDtoValue::int($payload['delivery_speed'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, FinanceV1GetFinanceAccrualByDayResponseAccrualPostingProduct::class),
            extra: OzonDtoValue::extra($payload, ['delivery_schema', 'delivery_speed', 'products']),
        );
    }
}
