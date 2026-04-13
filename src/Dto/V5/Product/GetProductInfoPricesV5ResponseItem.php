<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoPricesV5ResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $acquiring,
        public ?ItemCommissionsV5 $commissions,
        public ?ItemMarketing $marketingActions,
        public ?string $offerId,
        public ?ItemPriceV5 $price,
        public ?PriceIndexes $priceIndexes,
        public ?int $productId,
        public ?float $volumeWeight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            acquiring: OzonDtoValue::float($payload['acquiring'] ?? null),
            commissions: OzonDtoValue::object($payload['commissions'] ?? null, ItemCommissionsV5::class),
            marketingActions: OzonDtoValue::object($payload['marketing_actions'] ?? null, ItemMarketing::class),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, ItemPriceV5::class),
            priceIndexes: OzonDtoValue::object($payload['price_indexes'] ?? null, PriceIndexes::class),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            volumeWeight: OzonDtoValue::float($payload['volume_weight'] ?? null),
            extra: OzonDtoValue::extra($payload, [
                'acquiring',
                'commissions',
                'marketing_actions',
                'offer_id',
                'price',
                'price_indexes',
                'product_id',
                'volume_weight',
            ]),
        );
    }
}
