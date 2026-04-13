<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetCarriageAvailableListResponseResult implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $carriageId,
        public ?int $carriagePostingsCount,
        public ?string $carriageStatus,
        public ?string $cutoffAt,
        public ?int $deliveryMethodId,
        public ?string $deliveryMethodName,
        public array $errors,
        public ?string $firstMileType,
        public ?bool $hasEntrustedAcceptance,
        public ?int $mandatoryPostingsCount,
        public ?int $mandatoryPackagedCount,
        public ?string $recommendedTimeLocal,
        public ?float $recommendedTimeUtcOffsetInMinutes,
        public ?string $tplProviderIconUrl,
        public ?string $tplProviderName,
        public ?string $warehouseCity,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public ?string $warehouseTimezone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            carriageId: OzonDtoValue::int($payload['carriage_id'] ?? null),
            carriagePostingsCount: OzonDtoValue::int($payload['carriage_postings_count'] ?? null),
            carriageStatus: OzonDtoValue::string($payload['carriage_status'] ?? null),
            cutoffAt: OzonDtoValue::string($payload['cutoff_at'] ?? null),
            deliveryMethodId: OzonDtoValue::int($payload['delivery_method_id'] ?? null),
            deliveryMethodName: OzonDtoValue::string($payload['delivery_method_name'] ?? null),
            errors: OzonDtoValue::array($payload['errors'] ?? null),
            firstMileType: OzonDtoValue::string($payload['first_mile_type'] ?? null),
            hasEntrustedAcceptance: OzonDtoValue::bool($payload['has_entrusted_acceptance'] ?? null),
            mandatoryPostingsCount: OzonDtoValue::int($payload['mandatory_postings_count'] ?? null),
            mandatoryPackagedCount: OzonDtoValue::int($payload['mandatory_packaged_count'] ?? null),
            recommendedTimeLocal: OzonDtoValue::string($payload['recommended_time_local'] ?? null),
            recommendedTimeUtcOffsetInMinutes: OzonDtoValue::float($payload['recommended_time_utc_offset_in_minutes'] ?? null),
            tplProviderIconUrl: OzonDtoValue::string($payload['tpl_provider_icon_url'] ?? null),
            tplProviderName: OzonDtoValue::string($payload['tpl_provider_name'] ?? null),
            warehouseCity: OzonDtoValue::string($payload['warehouse_city'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            warehouseTimezone: OzonDtoValue::string($payload['warehouse_timezone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['carriage_id', 'carriage_postings_count', 'carriage_status', 'cutoff_at', 'delivery_method_id', 'delivery_method_name', 'errors', 'first_mile_type', 'has_entrusted_acceptance', 'mandatory_postings_count', 'mandatory_packaged_count', 'recommended_time_local', 'recommended_time_utc_offset_in_minutes', 'tpl_provider_icon_url', 'tpl_provider_name', 'warehouse_city', 'warehouse_id', 'warehouse_name', 'warehouse_timezone']),
        );
    }
}
