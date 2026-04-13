<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CarriageCarriageGetResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $arrivalPassIds
     * @param list<string> $availableActions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $actType,
        public ?bool $allBlrTraceable,
        public ?bool $isWaybillEnabled,
        public ?bool $isEconom,
        public array $arrivalPassIds,
        public array $availableActions,
        public ?CarriageCarriageGetResponseCancelAvailability $cancelAvailability,
        public ?int $carriageId,
        public ?int $companyId,
        public ?int $containersCount,
        public ?string $createdAt,
        public ?int $deliveryMethodId,
        public ?string $departureDate,
        public ?string $firstMileType,
        public ?bool $hasPostingsForNextCarriage,
        public ?string $integrationType,
        public ?bool $isContainerLabelPrinted,
        public ?bool $isPartial,
        public ?int $partialNum,
        public ?int $retryCount,
        public ?string $status,
        public ?int $tplProviderId,
        public ?string $updatedAt,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actType: OzonDtoValue::string($payload['act_type'] ?? null),
            allBlrTraceable: OzonDtoValue::bool($payload['all_blr_traceable'] ?? null),
            isWaybillEnabled: OzonDtoValue::bool($payload['is_waybill_enabled'] ?? null),
            isEconom: OzonDtoValue::bool($payload['is_econom'] ?? null),
            arrivalPassIds: OzonDtoValue::array($payload['arrival_pass_ids'] ?? null),
            availableActions: OzonDtoValue::array($payload['available_actions'] ?? null),
            cancelAvailability: OzonDtoValue::object($payload['cancel_availability'] ?? null, CarriageCarriageGetResponseCancelAvailability::class),
            carriageId: OzonDtoValue::int($payload['carriage_id'] ?? null),
            companyId: OzonDtoValue::int($payload['company_id'] ?? null),
            containersCount: OzonDtoValue::int($payload['containers_count'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            deliveryMethodId: OzonDtoValue::int($payload['delivery_method_id'] ?? null),
            departureDate: OzonDtoValue::string($payload['departure_date'] ?? null),
            firstMileType: OzonDtoValue::string($payload['first_mile_type'] ?? null),
            hasPostingsForNextCarriage: OzonDtoValue::bool($payload['has_postings_for_next_carriage'] ?? null),
            integrationType: OzonDtoValue::string($payload['integration_type'] ?? null),
            isContainerLabelPrinted: OzonDtoValue::bool($payload['is_container_label_printed'] ?? null),
            isPartial: OzonDtoValue::bool($payload['is_partial'] ?? null),
            partialNum: OzonDtoValue::int($payload['partial_num'] ?? null),
            retryCount: OzonDtoValue::int($payload['retry_count'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            tplProviderId: OzonDtoValue::int($payload['tpl_provider_id'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['act_type', 'all_blr_traceable', 'is_waybill_enabled', 'is_econom', 'arrival_pass_ids', 'available_actions', 'cancel_availability', 'carriage_id', 'company_id', 'containers_count', 'created_at', 'delivery_method_id', 'departure_date', 'first_mile_type', 'has_postings_for_next_carriage', 'integration_type', 'is_container_label_printed', 'is_partial', 'partial_num', 'retry_count', 'status', 'tpl_provider_id', 'updated_at', 'warehouse_id']),
        );
    }
}
