<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFBSReturnMileInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<WarehouseFBSReturnMileInfoResponseWarehouseReturnMileSettings> $returnMileSettings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $returnMileSettings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            returnMileSettings: OzonDtoValue::objectList($payload['return_mile_settings'] ?? null, WarehouseFBSReturnMileInfoResponseWarehouseReturnMileSettings::class),
            extra: OzonDtoValue::extra($payload, ['return_mile_settings']),
        );
    }
}
