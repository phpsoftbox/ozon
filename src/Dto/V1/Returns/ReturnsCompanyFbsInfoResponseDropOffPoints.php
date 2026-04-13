<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnsCompanyFbsInfoResponseDropOffPoints implements OzonDtoInterface
{
    /**
     * @param list<string> $warehousesIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?int $boxCount,
        public ?int $id,
        public ?string $name,
        public ?ReturnsCompanyFbsInfoResponsePassInfo $passInfo,
        public ?int $placeId,
        public ?int $returnsCount,
        public ?string $utcOffset,
        public array $warehousesIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            boxCount: OzonDtoValue::int($payload['box_count'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            passInfo: OzonDtoValue::object($payload['pass_info'] ?? null, ReturnsCompanyFbsInfoResponsePassInfo::class),
            placeId: OzonDtoValue::int($payload['place_id'] ?? null),
            returnsCount: OzonDtoValue::int($payload['returns_count'] ?? null),
            utcOffset: OzonDtoValue::string($payload['utc_offset'] ?? null),
            warehousesIds: OzonDtoValue::array($payload['warehouses_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address', 'box_count', 'id', 'name', 'pass_info', 'place_id', 'returns_count', 'utc_offset', 'warehouses_ids']),
        );
    }
}
