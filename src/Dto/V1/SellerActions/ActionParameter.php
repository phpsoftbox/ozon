<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SellerActions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionParameter implements OzonDtoInterface
{
    /**
     * @param list<string> $addresses
     * @param list<ParameterDiscountLevels> $discountLevels
     * @param list<ParameterPickedSegment> $pickedSegments
     * @param list<string> $warehouses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $addresses,
        public ?ParameterAutoStopActionReasonEnum $autoStopActionReason,
        public ?float $budget,
        public ?float $budgetSpent,
        public ?string $dateEnd,
        public ?string $dateStart,
        public array $discountLevels,
        public ?ActionParameterDiscountTypeEnum $discountType,
        public ?float $discountValue,
        public ?bool $isLegalEntitiesSegment,
        public ?float $minActionPercent,
        public ?float $minOrderAmount,
        public array $pickedSegments,
        public ?SellerActionsListRequestStatusEnum $status,
        public ?string $title,
        public ?SellerActionsListRequestActionTypeEnum $type,
        public ?ActionParameterVoucherParameter $voucherParameters,
        public array $warehouses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            addresses: OzonDtoValue::array($payload['addresses'] ?? null),
            autoStopActionReason: OzonDtoValue::object($payload['auto_stop_action_reason'] ?? null, ParameterAutoStopActionReasonEnum::class),
            budget: OzonDtoValue::float($payload['budget'] ?? null),
            budgetSpent: OzonDtoValue::float($payload['budget_spent'] ?? null),
            dateEnd: OzonDtoValue::string($payload['date_end'] ?? null),
            dateStart: OzonDtoValue::string($payload['date_start'] ?? null),
            discountLevels: OzonDtoValue::objectList($payload['discount_levels'] ?? null, ParameterDiscountLevels::class),
            discountType: OzonDtoValue::object($payload['discount_type'] ?? null, ActionParameterDiscountTypeEnum::class),
            discountValue: OzonDtoValue::float($payload['discount_value'] ?? null),
            isLegalEntitiesSegment: OzonDtoValue::bool($payload['is_legal_entities_segment'] ?? null),
            minActionPercent: OzonDtoValue::float($payload['min_action_percent'] ?? null),
            minOrderAmount: OzonDtoValue::float($payload['min_order_amount'] ?? null),
            pickedSegments: OzonDtoValue::objectList($payload['picked_segments'] ?? null, ParameterPickedSegment::class),
            status: OzonDtoValue::object($payload['status'] ?? null, SellerActionsListRequestStatusEnum::class),
            title: OzonDtoValue::string($payload['title'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, SellerActionsListRequestActionTypeEnum::class),
            voucherParameters: OzonDtoValue::object($payload['voucher_parameters'] ?? null, ActionParameterVoucherParameter::class),
            warehouses: OzonDtoValue::array($payload['warehouses'] ?? null),
            extra: OzonDtoValue::extra($payload, ['addresses', 'auto_stop_action_reason', 'budget', 'budget_spent', 'date_end', 'date_start', 'discount_levels', 'discount_type', 'discount_value', 'is_legal_entities_segment', 'min_action_percent', 'min_order_amount', 'picked_segments', 'status', 'title', 'type', 'voucher_parameters', 'warehouses']),
        );
    }
}
