<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpWarehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbpWarehouseListResponseWarehouse implements OzonDtoInterface
{
    /**
     * @param list<int> $supplyTypes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?FbpWarehouseListResponseAddressDetailing $addressDetailing,
        public ?int $id,
        public ?bool $isBonded,
        public ?string $name,
        public ?string $partnerName,
        public array $supplyTypes,
        public ?string $timezoneName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            addressDetailing: OzonDtoValue::object($payload['address_detailing'] ?? null, FbpWarehouseListResponseAddressDetailing::class),
            id: OzonDtoValue::int($payload['id'] ?? null),
            isBonded: OzonDtoValue::bool($payload['is_bonded'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            partnerName: OzonDtoValue::string($payload['partner_name'] ?? null),
            supplyTypes: OzonDtoValue::array($payload['supply_types'] ?? null),
            timezoneName: OzonDtoValue::string($payload['timezone_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address_detailing', 'id', 'is_bonded', 'name', 'partner_name', 'supply_types', 'timezone_name']),
        );
    }
}
