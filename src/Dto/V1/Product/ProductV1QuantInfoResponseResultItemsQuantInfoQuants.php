<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1QuantInfoResponseResultItemsQuantInfoQuants implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $barcodesExtended
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $barcodesExtended,
        public ?ProductV1QuantInfoResponseResultItemsQuantInfoQuantsDimensions $dimensions,
        public ?ProductV1QuantInfoResponseResultItemsQuantInfoQuantsMarketingPrice $marketingPrice,
        public ?string $minPrice,
        public ?string $oldPrice,
        public ?string $price,
        public ?string $quantCode,
        public ?int $quantSice,
        public ?string $shipmentType,
        public ?int $sku,
        public ?ProductV1QuantInfoResponseResultItemsQuantInfoQuantsTexts $statuses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            barcodesExtended: OzonDtoValue::array($payload['barcodes_extended'] ?? null),
            dimensions: OzonDtoValue::object($payload['dimensions'] ?? null, ProductV1QuantInfoResponseResultItemsQuantInfoQuantsDimensions::class),
            marketingPrice: OzonDtoValue::object($payload['marketing_price'] ?? null, ProductV1QuantInfoResponseResultItemsQuantInfoQuantsMarketingPrice::class),
            minPrice: OzonDtoValue::string($payload['min_price'] ?? null),
            oldPrice: OzonDtoValue::string($payload['old_price'] ?? null),
            price: OzonDtoValue::string($payload['price'] ?? null),
            quantCode: OzonDtoValue::string($payload['quant_code'] ?? null),
            quantSice: OzonDtoValue::int($payload['quant_sice'] ?? null),
            shipmentType: OzonDtoValue::string($payload['shipment_type'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            statuses: OzonDtoValue::object($payload['statuses'] ?? null, ProductV1QuantInfoResponseResultItemsQuantInfoQuantsTexts::class),
            extra: OzonDtoValue::extra($payload, ['barcodes_extended', 'dimensions', 'marketing_price', 'min_price', 'old_price', 'price', 'quant_code', 'quant_sice', 'shipment_type', 'sku', 'statuses']),
        );
    }
}
