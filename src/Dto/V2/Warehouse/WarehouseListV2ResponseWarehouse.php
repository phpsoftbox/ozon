<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseListV2ResponseWarehouse implements OzonDtoInterface
{
    /**
     * @param list<string> $courierPhones
     * @param list<WarehouseWorkingDaysEnum> $workingDays
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?WarehouseAddressInfo $addressInfo,
        public ?WarehouseCarriageLabelTypeEnum $carriageLabelType,
        public ?string $courierComment,
        public array $courierPhones,
        public ?string $createdAt,
        public ?int $cutInTime,
        public ?WarehouseFirstMile $firstMile,
        public ?bool $hasEntrustedAcceptance,
        public ?bool $hasPostingsLimit,
        public ?bool $isAutoAssembly,
        public ?bool $isComfort,
        public ?bool $isExpress,
        public ?bool $isKgt,
        public ?bool $isRfbs,
        public ?bool $isWaybillEnabled,
        public ?int $minPostingsLimit,
        public ?string $name,
        public ?string $pauseAt,
        public ?string $phone,
        public ?int $postingsLimit,
        public ?int $slaCutIn,
        public ?string $status,
        public ?WarehouseTimetable $timetable,
        public ?string $updatedAt,
        public ?int $warehouseId,
        public ?string $warehouseType,
        public ?bool $withItemList,
        public array $workingDays,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            addressInfo: OzonDtoValue::object($payload['address_info'] ?? null, WarehouseAddressInfo::class),
            carriageLabelType: OzonDtoValue::object($payload['carriage_label_type'] ?? null, WarehouseCarriageLabelTypeEnum::class),
            courierComment: OzonDtoValue::string($payload['courier_comment'] ?? null),
            courierPhones: OzonDtoValue::array($payload['courier_phones'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            cutInTime: OzonDtoValue::int($payload['cut_in_time'] ?? null),
            firstMile: OzonDtoValue::object($payload['first_mile'] ?? null, WarehouseFirstMile::class),
            hasEntrustedAcceptance: OzonDtoValue::bool($payload['has_entrusted_acceptance'] ?? null),
            hasPostingsLimit: OzonDtoValue::bool($payload['has_postings_limit'] ?? null),
            isAutoAssembly: OzonDtoValue::bool($payload['is_auto_assembly'] ?? null),
            isComfort: OzonDtoValue::bool($payload['is_comfort'] ?? null),
            isExpress: OzonDtoValue::bool($payload['is_express'] ?? null),
            isKgt: OzonDtoValue::bool($payload['is_kgt'] ?? null),
            isRfbs: OzonDtoValue::bool($payload['is_rfbs'] ?? null),
            isWaybillEnabled: OzonDtoValue::bool($payload['is_waybill_enabled'] ?? null),
            minPostingsLimit: OzonDtoValue::int($payload['min_postings_limit'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            pauseAt: OzonDtoValue::string($payload['pause_at'] ?? null),
            phone: OzonDtoValue::string($payload['phone'] ?? null),
            postingsLimit: OzonDtoValue::int($payload['postings_limit'] ?? null),
            slaCutIn: OzonDtoValue::int($payload['sla_cut_in'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            timetable: OzonDtoValue::object($payload['timetable'] ?? null, WarehouseTimetable::class),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseType: OzonDtoValue::string($payload['warehouse_type'] ?? null),
            withItemList: OzonDtoValue::bool($payload['with_item_list'] ?? null),
            workingDays: OzonDtoValue::objectList($payload['working_days'] ?? null, WarehouseWorkingDaysEnum::class),
            extra: OzonDtoValue::extra($payload, ['address_info', 'carriage_label_type', 'courier_comment', 'courier_phones', 'created_at', 'cut_in_time', 'first_mile', 'has_entrusted_acceptance', 'has_postings_limit', 'is_auto_assembly', 'is_comfort', 'is_express', 'is_kgt', 'is_rfbs', 'is_waybill_enabled', 'min_postings_limit', 'name', 'pause_at', 'phone', 'postings_limit', 'sla_cut_in', 'status', 'timetable', 'updated_at', 'warehouse_id', 'warehouse_type', 'with_item_list', 'working_days']),
        );
    }
}
