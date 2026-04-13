<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CarriageDeliveryListResponseResult implements OzonDtoInterface
{
    /**
     * @param list<V1CarriageDeliveryListResponseResultCarriages> $carriages
     * @param list<V1CarriageDeliveryListResponseResultErrors> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $assemblyListAvailability,
        public ?bool $canCreateAnotherCarriage,
        public ?int $carriagePostingsCount,
        public ?int $carriageQuantumCount,
        public array $carriages,
        public ?string $cutIn,
        public ?int $deliveryMethodId,
        public ?string $deliveryMethodName,
        public ?string $deliveryMethodStatus,
        public ?string $departureDate,
        public ?string $dropoffAddress,
        public ?string $dropoffChangeAvailability,
        public ?int $dropoffPointId,
        public ?string $dropoffPointType,
        public array $errors,
        public ?bool $firstMileChanging,
        public ?string $firstMileType,
        public ?bool $hasEntrustedAcceptance,
        public ?string $integrationType,
        public ?bool $isPresort,
        public ?bool $isRfbs,
        public ?string $recommendedTimeLocal,
        public ?float $recommendedTimeUtcOffsetInMinutes,
        public ?string $cutoffAt,
        public ?int $mandatoryPackagedCount,
        public ?int $mandatoryPackagedQuantumCount,
        public ?int $mandatoryPostingsCount,
        public ?int $mandatoryQuantumCount,
        public ?int $optionalPackagedCount,
        public ?int $postingsForAnotherCarriageCount,
        public ?int $quantumForAnotherCarriageCount,
        public ?string $timeslotFrom,
        public ?string $timeslotTo,
        public ?string $tplProviderIconUrl,
        public ?string $tplProviderName,
        public ?string $warehouseCity,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            assemblyListAvailability: OzonDtoValue::bool($payload['assembly_list_availability'] ?? null),
            canCreateAnotherCarriage: OzonDtoValue::bool($payload['can_create_another_carriage'] ?? null),
            carriagePostingsCount: OzonDtoValue::int($payload['carriage_postings_count'] ?? null),
            carriageQuantumCount: OzonDtoValue::int($payload['carriage_quantum_count'] ?? null),
            carriages: OzonDtoValue::objectList($payload['carriages'] ?? null, V1CarriageDeliveryListResponseResultCarriages::class),
            cutIn: OzonDtoValue::string($payload['cut_in'] ?? null),
            deliveryMethodId: OzonDtoValue::int($payload['delivery_method_id'] ?? null),
            deliveryMethodName: OzonDtoValue::string($payload['delivery_method_name'] ?? null),
            deliveryMethodStatus: OzonDtoValue::string($payload['delivery_method_status'] ?? null),
            departureDate: OzonDtoValue::string($payload['departure_date'] ?? null),
            dropoffAddress: OzonDtoValue::string($payload['dropoff_address'] ?? null),
            dropoffChangeAvailability: OzonDtoValue::string($payload['dropoff_change_availability'] ?? null),
            dropoffPointId: OzonDtoValue::int($payload['dropoff_point_id'] ?? null),
            dropoffPointType: OzonDtoValue::string($payload['dropoff_point_type'] ?? null),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1CarriageDeliveryListResponseResultErrors::class),
            firstMileChanging: OzonDtoValue::bool($payload['first_mile_changing'] ?? null),
            firstMileType: OzonDtoValue::string($payload['first_mile_type'] ?? null),
            hasEntrustedAcceptance: OzonDtoValue::bool($payload['has_entrusted_acceptance'] ?? null),
            integrationType: OzonDtoValue::string($payload['integration_type'] ?? null),
            isPresort: OzonDtoValue::bool($payload['is_presort'] ?? null),
            isRfbs: OzonDtoValue::bool($payload['is_rfbs'] ?? null),
            recommendedTimeLocal: OzonDtoValue::string($payload['recommended_time_local'] ?? null),
            recommendedTimeUtcOffsetInMinutes: OzonDtoValue::float($payload['recommended_time_utc_offset_in_minutes'] ?? null),
            cutoffAt: OzonDtoValue::string($payload['cutoff_at'] ?? null),
            mandatoryPackagedCount: OzonDtoValue::int($payload['mandatory_packaged_count'] ?? null),
            mandatoryPackagedQuantumCount: OzonDtoValue::int($payload['mandatory_packaged_quantum_count'] ?? null),
            mandatoryPostingsCount: OzonDtoValue::int($payload['mandatory_postings_count'] ?? null),
            mandatoryQuantumCount: OzonDtoValue::int($payload['mandatory_quantum_count'] ?? null),
            optionalPackagedCount: OzonDtoValue::int($payload['optional_packaged_count'] ?? null),
            postingsForAnotherCarriageCount: OzonDtoValue::int($payload['postings_for_another_carriage_count'] ?? null),
            quantumForAnotherCarriageCount: OzonDtoValue::int($payload['quantum_for_another_carriage_count'] ?? null),
            timeslotFrom: OzonDtoValue::string($payload['timeslot_from'] ?? null),
            timeslotTo: OzonDtoValue::string($payload['timeslot_to'] ?? null),
            tplProviderIconUrl: OzonDtoValue::string($payload['tpl_provider_icon_url'] ?? null),
            tplProviderName: OzonDtoValue::string($payload['tpl_provider_name'] ?? null),
            warehouseCity: OzonDtoValue::string($payload['warehouse_city'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['assembly_list_availability', 'can_create_another_carriage', 'carriage_postings_count', 'carriage_quantum_count', 'carriages', 'cut_in', 'delivery_method_id', 'delivery_method_name', 'delivery_method_status', 'departure_date', 'dropoff_address', 'dropoff_change_availability', 'dropoff_point_id', 'dropoff_point_type', 'errors', 'first_mile_changing', 'first_mile_type', 'has_entrusted_acceptance', 'integration_type', 'is_presort', 'is_rfbs', 'recommended_time_local', 'recommended_time_utc_offset_in_minutes', 'cutoff_at', 'mandatory_packaged_count', 'mandatory_packaged_quantum_count', 'mandatory_postings_count', 'mandatory_quantum_count', 'optional_packaged_count', 'postings_for_another_carriage_count', 'quantum_for_another_carriage_count', 'timeslot_from', 'timeslot_to', 'tpl_provider_icon_url', 'tpl_provider_name', 'warehouse_city', 'warehouse_id', 'warehouse_name']),
        );
    }
}
