<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ItemResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $tags
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $iconPath,
        public ?int $sku,
        public ?string $name,
        public ?string $offerId,
        public ?int $quantity,
        public ?string $barcode,
        public ?int $productId,
        public ?int $quant,
        public ?bool $isQuantEditable,
        public ?float $volumeInLitres,
        public ?float $totalVolumeInLitres,
        public ?string $contractorItemCode,
        public ?V1ItemSfboAttribute $sfboAttribute,
        public ?V1BundleItemShipmentType $shipmentType,
        public array $tags,
        public ?string $placementZone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            iconPath: OzonDtoValue::string($payload['icon_path'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quant: OzonDtoValue::int($payload['quant'] ?? null),
            isQuantEditable: OzonDtoValue::bool($payload['is_quant_editable'] ?? null),
            volumeInLitres: OzonDtoValue::float($payload['volume_in_litres'] ?? null),
            totalVolumeInLitres: OzonDtoValue::float($payload['total_volume_in_litres'] ?? null),
            contractorItemCode: OzonDtoValue::string($payload['contractor_item_code'] ?? null),
            sfboAttribute: OzonDtoValue::object($payload['sfbo_attribute'] ?? null, V1ItemSfboAttribute::class),
            shipmentType: OzonDtoValue::object($payload['shipment_type'] ?? null, V1BundleItemShipmentType::class),
            tags: OzonDtoValue::array($payload['tags'] ?? null),
            placementZone: OzonDtoValue::string($payload['placement_zone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['icon_path', 'sku', 'name', 'offer_id', 'quantity', 'barcode', 'product_id', 'quant', 'is_quant_editable', 'volume_in_litres', 'total_volume_in_litres', 'contractor_item_code', 'sfbo_attribute', 'shipment_type', 'tags', 'placement_zone']),
        );
    }
}
