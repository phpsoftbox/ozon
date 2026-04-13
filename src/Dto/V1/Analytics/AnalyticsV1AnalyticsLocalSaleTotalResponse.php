<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleTotalResponse implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsV1AnalyticsLocalSaleTotalResponseOverpaymentItem> $overpaymentItems
     * @param list<AnalyticsV1AnalyticsLocalSaleTotalResponseOverpaymentReason> $overpaymentReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $fboQuantity,
        public ?AnalyticsV1AnalyticsLocalSaleTotalResponseLocalData $localData,
        public ?AnalyticsV1AnalyticsLocalSaleTotalResponseOverpayment $overpayment,
        public array $overpaymentItems,
        public array $overpaymentReasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fboQuantity: OzonDtoValue::int($payload['fbo_quantity'] ?? null),
            localData: OzonDtoValue::object($payload['local_data'] ?? null, AnalyticsV1AnalyticsLocalSaleTotalResponseLocalData::class),
            overpayment: OzonDtoValue::object($payload['overpayment'] ?? null, AnalyticsV1AnalyticsLocalSaleTotalResponseOverpayment::class),
            overpaymentItems: OzonDtoValue::objectList($payload['overpayment_items'] ?? null, AnalyticsV1AnalyticsLocalSaleTotalResponseOverpaymentItem::class),
            overpaymentReasons: OzonDtoValue::objectList($payload['overpayment_reasons'] ?? null, AnalyticsV1AnalyticsLocalSaleTotalResponseOverpaymentReason::class),
            extra: OzonDtoValue::extra($payload, ['fbo_quantity', 'local_data', 'overpayment', 'overpayment_items', 'overpayment_reasons']),
        );
    }
}
