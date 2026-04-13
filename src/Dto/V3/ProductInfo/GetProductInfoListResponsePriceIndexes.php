<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponsePriceIndexes implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PriceIndexesColorIndex $colorIndex,
        public ?PriceIndexesIndexDataExternal $externalIndexData,
        public ?PriceIndexesIndexDataOzon $ozonIndexData,
        public ?PriceIndexesIndexDataSelf $selfMarketplacesIndexData,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            colorIndex: OzonDtoValue::object($payload['color_index'] ?? null, PriceIndexesColorIndex::class),
            externalIndexData: OzonDtoValue::object($payload['external_index_data'] ?? null, PriceIndexesIndexDataExternal::class),
            ozonIndexData: OzonDtoValue::object($payload['ozon_index_data'] ?? null, PriceIndexesIndexDataOzon::class),
            selfMarketplacesIndexData: OzonDtoValue::object($payload['self_marketplaces_index_data'] ?? null, PriceIndexesIndexDataSelf::class),
            extra: OzonDtoValue::extra($payload, ['color_index', 'external_index_data', 'ozon_index_data', 'self_marketplaces_index_data']),
        );
    }
}
