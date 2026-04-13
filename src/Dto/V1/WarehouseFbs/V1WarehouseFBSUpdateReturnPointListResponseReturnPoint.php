<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFBSUpdateReturnPointListResponseReturnPoint implements OzonDtoInterface
{
    /**
     * @param list<V1WarehouseFBSUpdateReturnPointListResponseWorkingDays> $workingDays
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?V1WarehouseFBSUpdateReturnPointListResponseCoordinates $coordinates,
        public ?int $id,
        public ?string $name,
        public ?V1WarehouseFBSUpdateReturnPointListResponseReturnPointTypeEnum $type,
        public ?int $utcOffset,
        public array $workingDays,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            coordinates: OzonDtoValue::object($payload['coordinates'] ?? null, V1WarehouseFBSUpdateReturnPointListResponseCoordinates::class),
            id: OzonDtoValue::int($payload['id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, V1WarehouseFBSUpdateReturnPointListResponseReturnPointTypeEnum::class),
            utcOffset: OzonDtoValue::int($payload['utc_offset'] ?? null),
            workingDays: OzonDtoValue::objectList($payload['working_days'] ?? null, V1WarehouseFBSUpdateReturnPointListResponseWorkingDays::class),
            extra: OzonDtoValue::extra($payload, ['address', 'coordinates', 'id', 'name', 'type', 'utc_offset', 'working_days']),
        );
    }
}
