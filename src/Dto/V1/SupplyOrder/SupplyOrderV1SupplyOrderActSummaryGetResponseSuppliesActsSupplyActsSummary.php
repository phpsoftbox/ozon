<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsSummary implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsSummaryApprovedAmount $approvedAmount,
        public ?int $approvedQuantity,
        public ?int $declaredQuantity,
        public ?SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsSummaryFactAmount $factAmount,
        public ?int $factQuantity,
        public ?int $skuQuantity,
        public ?int $unidentifiedQuantity,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            approvedAmount: OzonDtoValue::object($payload['approved_amount'] ?? null, SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsSummaryApprovedAmount::class),
            approvedQuantity: OzonDtoValue::int($payload['approved_quantity'] ?? null),
            declaredQuantity: OzonDtoValue::int($payload['declared_quantity'] ?? null),
            factAmount: OzonDtoValue::object($payload['fact_amount'] ?? null, SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsSummaryFactAmount::class),
            factQuantity: OzonDtoValue::int($payload['fact_quantity'] ?? null),
            skuQuantity: OzonDtoValue::int($payload['sku_quantity'] ?? null),
            unidentifiedQuantity: OzonDtoValue::int($payload['unidentified_quantity'] ?? null),
            extra: OzonDtoValue::extra($payload, ['approved_amount', 'approved_quantity', 'declared_quantity', 'fact_amount', 'fact_quantity', 'sku_quantity', 'unidentified_quantity']),
        );
    }
}
