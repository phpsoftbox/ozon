<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RejectedItemsRestrictions implements OzonDtoInterface
{
    /**
     * @param list<RestrictionsReasonEnum> $reasonsRestrictions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $reasonsRestrictions,
        public ?int $skuHasNoSalesInDays,
        public ?int $skuQuantityLimit,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            reasonsRestrictions: OzonDtoValue::objectList($payload['reasons_restrictions'] ?? null, RestrictionsReasonEnum::class),
            skuHasNoSalesInDays: OzonDtoValue::int($payload['sku_has_no_sales_in_days'] ?? null),
            skuQuantityLimit: OzonDtoValue::int($payload['sku_quantity_limit'] ?? null),
            extra: OzonDtoValue::extra($payload, ['reasons_restrictions', 'sku_has_no_sales_in_days', 'sku_quantity_limit']),
        );
    }
}
