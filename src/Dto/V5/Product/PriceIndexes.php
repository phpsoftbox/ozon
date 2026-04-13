<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PriceIndexes implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $colorIndex,
        public ?PriceIndexData $externalIndexData,
        public ?PriceIndexData $ozonIndexData,
        public ?PriceIndexData $selfMarketplacesIndexData,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            colorIndex: OzonDtoValue::string($payload['color_index'] ?? null),
            externalIndexData: OzonDtoValue::object($payload['external_index_data'] ?? null, PriceIndexData::class),
            ozonIndexData: OzonDtoValue::object($payload['ozon_index_data'] ?? null, PriceIndexData::class),
            selfMarketplacesIndexData: OzonDtoValue::object($payload['self_marketplaces_index_data'] ?? null, PriceIndexData::class),
            extra: OzonDtoValue::extra($payload, [
                'color_index',
                'external_index_data',
                'ozon_index_data',
                'self_marketplaces_index_data',
            ]),
        );
    }
}
