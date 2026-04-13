<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetRealizationReportResponseV2Row implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $commissionRatio,
        public ?RowItemCommission $deliveryCommission,
        public ?RowItem $item,
        public ?RowItemCommissionReturn $returnCommission,
        public ?int $rownumber,
        public ?float $sellerPricePerInstance,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            commissionRatio: OzonDtoValue::float($payload['commission_ratio'] ?? null),
            deliveryCommission: OzonDtoValue::object($payload['delivery_commission'] ?? null, RowItemCommission::class),
            item: OzonDtoValue::object($payload['item'] ?? null, RowItem::class),
            returnCommission: OzonDtoValue::object($payload['return_commission'] ?? null, RowItemCommissionReturn::class),
            rownumber: OzonDtoValue::int($payload['rowNumber'] ?? null),
            sellerPricePerInstance: OzonDtoValue::float($payload['seller_price_per_instance'] ?? null),
            extra: OzonDtoValue::extra($payload, ['commission_ratio', 'delivery_commission', 'item', 'return_commission', 'rowNumber', 'seller_price_per_instance']),
        );
    }
}
