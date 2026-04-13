<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItems implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItemsApprovedAmount $approvedAmount,
        public ?int $approvedQuantity,
        public ?int $declaredQuantity,
        public ?SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItemsFactAmount $factAmount,
        public ?int $factQuantity,
        public ?SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItemsSkuInfo $skuInfo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            approvedAmount: OzonDtoValue::object($payload['approved_amount'] ?? null, SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItemsApprovedAmount::class),
            approvedQuantity: OzonDtoValue::int($payload['approved_quantity'] ?? null),
            declaredQuantity: OzonDtoValue::int($payload['declared_quantity'] ?? null),
            factAmount: OzonDtoValue::object($payload['fact_amount'] ?? null, SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItemsFactAmount::class),
            factQuantity: OzonDtoValue::int($payload['fact_quantity'] ?? null),
            skuInfo: OzonDtoValue::object($payload['sku_info'] ?? null, SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItemsSkuInfo::class),
            extra: OzonDtoValue::extra($payload, ['approved_amount', 'approved_quantity', 'declared_quantity', 'fact_amount', 'fact_quantity', 'sku_info']),
        );
    }
}
