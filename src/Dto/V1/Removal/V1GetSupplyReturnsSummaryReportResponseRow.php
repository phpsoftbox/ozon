<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Removal;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetSupplyReturnsSummaryReportResponseRow implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $barcode,
        public ?string $boxBarcode,
        public ?float $boxHeight,
        public ?int $boxId,
        public ?float $boxLength,
        public ?string $boxState,
        public ?float $boxVolume,
        public ?float $boxWeight,
        public ?float $boxWidth,
        public ?string $clearingWarehouseName,
        public ?string $deliveryDate,
        public ?string $deliveryType,
        public ?string $destinationWarehouseAddress,
        public ?string $destinationWarehouseName,
        public ?string $givenOutDate,
        public ?bool $isAutoReturn,
        public ?string $name,
        public ?string $offerId,
        public ?float $preliminaryDeliveryPrice,
        public ?int $quantCount,
        public ?int $quantityForReturn,
        public ?string $returnCreatedAt,
        public ?int $returnId,
        public ?string $returnState,
        public ?int $sku,
        public ?string $stockType,
        public ?string $utilizationDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            boxBarcode: OzonDtoValue::string($payload['box_barcode'] ?? null),
            boxHeight: OzonDtoValue::float($payload['box_height'] ?? null),
            boxId: OzonDtoValue::int($payload['box_id'] ?? null),
            boxLength: OzonDtoValue::float($payload['box_length'] ?? null),
            boxState: OzonDtoValue::string($payload['box_state'] ?? null),
            boxVolume: OzonDtoValue::float($payload['box_volume'] ?? null),
            boxWeight: OzonDtoValue::float($payload['box_weight'] ?? null),
            boxWidth: OzonDtoValue::float($payload['box_width'] ?? null),
            clearingWarehouseName: OzonDtoValue::string($payload['clearing_warehouse_name'] ?? null),
            deliveryDate: OzonDtoValue::string($payload['delivery_date'] ?? null),
            deliveryType: OzonDtoValue::string($payload['delivery_type'] ?? null),
            destinationWarehouseAddress: OzonDtoValue::string($payload['destination_warehouse_address'] ?? null),
            destinationWarehouseName: OzonDtoValue::string($payload['destination_warehouse_name'] ?? null),
            givenOutDate: OzonDtoValue::string($payload['given_out_date'] ?? null),
            isAutoReturn: OzonDtoValue::bool($payload['is_auto_return'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            preliminaryDeliveryPrice: OzonDtoValue::float($payload['preliminary_delivery_price'] ?? null),
            quantCount: OzonDtoValue::int($payload['quant_count'] ?? null),
            quantityForReturn: OzonDtoValue::int($payload['quantity_for_return'] ?? null),
            returnCreatedAt: OzonDtoValue::string($payload['return_created_at'] ?? null),
            returnId: OzonDtoValue::int($payload['return_id'] ?? null),
            returnState: OzonDtoValue::string($payload['return_state'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            stockType: OzonDtoValue::string($payload['stock_type'] ?? null),
            utilizationDate: OzonDtoValue::string($payload['utilization_date'] ?? null),
            extra: OzonDtoValue::extra($payload, ['barcode', 'box_barcode', 'box_height', 'box_id', 'box_length', 'box_state', 'box_volume', 'box_weight', 'box_width', 'clearing_warehouse_name', 'delivery_date', 'delivery_type', 'destination_warehouse_address', 'destination_warehouse_name', 'given_out_date', 'is_auto_return', 'name', 'offer_id', 'preliminary_delivery_price', 'quant_count', 'quantity_for_return', 'return_created_at', 'return_id', 'return_state', 'sku', 'stock_type', 'utilization_date']),
        );
    }
}
