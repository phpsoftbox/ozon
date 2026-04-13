<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseListResponseWarehouse implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $workingDays
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasEntrustedAcceptance,
        public ?bool $isRfbs,
        public ?string $name,
        public ?int $warehouseId,
        public ?bool $canPrintActInAdvance,
        public ?WarehouseFirstMileType $firstMileType,
        public ?bool $hasPostingsLimit,
        public ?bool $isKarantin,
        public ?bool $isKgt,
        public ?bool $isEconomy,
        public ?bool $isTimetableEditable,
        public ?int $minPostingsLimit,
        public ?int $postingsLimit,
        public ?int $minWorkingDays,
        public ?string $status,
        public array $workingDays,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasEntrustedAcceptance: OzonDtoValue::bool($payload['has_entrusted_acceptance'] ?? null),
            isRfbs: OzonDtoValue::bool($payload['is_rfbs'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            canPrintActInAdvance: OzonDtoValue::bool($payload['can_print_act_in_advance'] ?? null),
            firstMileType: OzonDtoValue::object($payload['first_mile_type'] ?? null, WarehouseFirstMileType::class),
            hasPostingsLimit: OzonDtoValue::bool($payload['has_postings_limit'] ?? null),
            isKarantin: OzonDtoValue::bool($payload['is_karantin'] ?? null),
            isKgt: OzonDtoValue::bool($payload['is_kgt'] ?? null),
            isEconomy: OzonDtoValue::bool($payload['is_economy'] ?? null),
            isTimetableEditable: OzonDtoValue::bool($payload['is_timetable_editable'] ?? null),
            minPostingsLimit: OzonDtoValue::int($payload['min_postings_limit'] ?? null),
            postingsLimit: OzonDtoValue::int($payload['postings_limit'] ?? null),
            minWorkingDays: OzonDtoValue::int($payload['min_working_days'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            workingDays: OzonDtoValue::array($payload['working_days'] ?? null),
            extra: OzonDtoValue::extra($payload, ['has_entrusted_acceptance', 'is_rfbs', 'name', 'warehouse_id', 'can_print_act_in_advance', 'first_mile_type', 'has_postings_limit', 'is_karantin', 'is_kgt', 'is_economy', 'is_timetable_editable', 'min_postings_limit', 'postings_limit', 'min_working_days', 'status', 'working_days']),
        );
    }
}
