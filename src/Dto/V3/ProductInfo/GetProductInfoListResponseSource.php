<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponseSource implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $createdAt,
        public ?string $quantCode,
        public ?SourceShipmentType $shipmentType,
        public ?int $sku,
        public ?string $source,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            quantCode: OzonDtoValue::string($payload['quant_code'] ?? null),
            shipmentType: OzonDtoValue::object($payload['shipment_type'] ?? null, SourceShipmentType::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            source: OzonDtoValue::string($payload['source'] ?? null),
            extra: OzonDtoValue::extra($payload, ['created_at', 'quant_code', 'shipment_type', 'sku', 'source']),
        );
    }
}
