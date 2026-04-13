<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetRealizationReportPostingResponseRow implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $commissionRatio,
        public ?RowItemCommission $deliveryCommission,
        public ?RowItem $item,
        public ?RowItemCommissionReturn $returnCommission,
        public ?int $rowNumber,
        public ?float $sellerPricePerInstance,
        public ?RowItemOrder $order,
        public ?RowItemLegalEntityDocument $legalEntityDocument,
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
            rowNumber: OzonDtoValue::int($payload['row_number'] ?? null),
            sellerPricePerInstance: OzonDtoValue::float($payload['seller_price_per_instance'] ?? null),
            order: OzonDtoValue::object($payload['order'] ?? null, RowItemOrder::class),
            legalEntityDocument: OzonDtoValue::object($payload['legal_entity_document'] ?? null, RowItemLegalEntityDocument::class),
            extra: OzonDtoValue::extra($payload, ['commission_ratio', 'delivery_commission', 'item', 'return_commission', 'row_number', 'seller_price_per_instance', 'order', 'legal_entity_document']),
        );
    }
}
