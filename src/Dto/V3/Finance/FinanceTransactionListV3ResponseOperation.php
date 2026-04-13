<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FinanceTransactionListV3ResponseOperation implements OzonDtoInterface
{
    /**
     * @param list<OperationItem> $items
     * @param list<OperationService> $services
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $accrualsForSale,
        public ?float $amount,
        public ?float $deliveryCharge,
        public array $items,
        public ?string $operationDate,
        public ?int $operationId,
        public ?string $operationType,
        public ?string $operationTypeName,
        public ?OperationPosting $posting,
        public ?float $returnDeliveryCharge,
        public ?float $saleCommission,
        public array $services,
        public ?string $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            accrualsForSale: OzonDtoValue::float($payload['accruals_for_sale'] ?? null),
            amount: OzonDtoValue::float($payload['amount'] ?? null),
            deliveryCharge: OzonDtoValue::float($payload['delivery_charge'] ?? null),
            items: OzonDtoValue::objectList($payload['items'] ?? null, OperationItem::class),
            operationDate: OzonDtoValue::string($payload['operation_date'] ?? null),
            operationId: OzonDtoValue::int($payload['operation_id'] ?? null),
            operationType: OzonDtoValue::string($payload['operation_type'] ?? null),
            operationTypeName: OzonDtoValue::string($payload['operation_type_name'] ?? null),
            posting: OzonDtoValue::object($payload['posting'] ?? null, OperationPosting::class),
            returnDeliveryCharge: OzonDtoValue::float($payload['return_delivery_charge'] ?? null),
            saleCommission: OzonDtoValue::float($payload['sale_commission'] ?? null),
            services: OzonDtoValue::objectList($payload['services'] ?? null, OperationService::class),
            type: OzonDtoValue::string($payload['type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['accruals_for_sale', 'amount', 'delivery_charge', 'items', 'operation_date', 'operation_id', 'operation_type', 'operation_type_name', 'posting', 'return_delivery_charge', 'sale_commission', 'services', 'type']),
        );
    }
}
