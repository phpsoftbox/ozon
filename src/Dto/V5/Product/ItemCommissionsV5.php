<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ItemCommissionsV5 implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $fboDelivToCustomerAmount,
        public ?float $fboDirectFlowTransMaxAmount,
        public ?float $fboDirectFlowTransMinAmount,
        public ?float $fboReturnFlowAmount,
        public ?float $fbsDelivToCustomerAmount,
        public ?float $fbsDirectFlowTransMaxAmount,
        public ?float $fbsDirectFlowTransMinAmount,
        public ?float $fbsFirstMileMaxAmount,
        public ?float $fbsFirstMileMinAmount,
        public ?float $fbsReturnFlowAmount,
        public ?float $salesPercentFbo,
        public ?float $salesPercentFbp,
        public ?float $salesPercentFbs,
        public ?float $salesPercentRfbs,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fboDelivToCustomerAmount: OzonDtoValue::float($payload['fbo_deliv_to_customer_amount'] ?? null),
            fboDirectFlowTransMaxAmount: OzonDtoValue::float($payload['fbo_direct_flow_trans_max_amount'] ?? null),
            fboDirectFlowTransMinAmount: OzonDtoValue::float($payload['fbo_direct_flow_trans_min_amount'] ?? null),
            fboReturnFlowAmount: OzonDtoValue::float($payload['fbo_return_flow_amount'] ?? null),
            fbsDelivToCustomerAmount: OzonDtoValue::float($payload['fbs_deliv_to_customer_amount'] ?? null),
            fbsDirectFlowTransMaxAmount: OzonDtoValue::float($payload['fbs_direct_flow_trans_max_amount'] ?? null),
            fbsDirectFlowTransMinAmount: OzonDtoValue::float($payload['fbs_direct_flow_trans_min_amount'] ?? null),
            fbsFirstMileMaxAmount: OzonDtoValue::float($payload['fbs_first_mile_max_amount'] ?? null),
            fbsFirstMileMinAmount: OzonDtoValue::float($payload['fbs_first_mile_min_amount'] ?? null),
            fbsReturnFlowAmount: OzonDtoValue::float($payload['fbs_return_flow_amount'] ?? null),
            salesPercentFbo: OzonDtoValue::float($payload['sales_percent_fbo'] ?? null),
            salesPercentFbp: OzonDtoValue::float($payload['sales_percent_fbp'] ?? null),
            salesPercentFbs: OzonDtoValue::float($payload['sales_percent_fbs'] ?? null),
            salesPercentRfbs: OzonDtoValue::float($payload['sales_percent_rfbs'] ?? null),
            extra: OzonDtoValue::extra($payload, [
                'fbo_deliv_to_customer_amount',
                'fbo_direct_flow_trans_max_amount',
                'fbo_direct_flow_trans_min_amount',
                'fbo_return_flow_amount',
                'fbs_deliv_to_customer_amount',
                'fbs_direct_flow_trans_max_amount',
                'fbs_direct_flow_trans_min_amount',
                'fbs_first_mile_max_amount',
                'fbs_first_mile_min_amount',
                'fbs_return_flow_amount',
                'sales_percent_fbo',
                'sales_percent_fbp',
                'sales_percent_fbs',
                'sales_percent_rfbs',
            ]),
        );
    }
}
