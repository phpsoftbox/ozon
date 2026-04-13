<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderDetailsResponseVehicle implements OzonDtoInterface
{
    /**
     * @param list<VehicleCanNotSetVehicleReasonEnum> $canNotSetReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $canNotSetReasons,
        public ?bool $canSet,
        public ?SupplyOrderDetailsResponseVehicleValue $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            canNotSetReasons: OzonDtoValue::objectList($payload['can_not_set_reasons'] ?? null, VehicleCanNotSetVehicleReasonEnum::class),
            canSet: OzonDtoValue::bool($payload['can_set'] ?? null),
            value: OzonDtoValue::object($payload['value'] ?? null, SupplyOrderDetailsResponseVehicleValue::class),
            extra: OzonDtoValue::extra($payload, ['can_not_set_reasons', 'can_set', 'value']),
        );
    }
}
