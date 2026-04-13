<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnSettingReturnPoint implements OzonDtoInterface
{
    /**
     * @param list<ReturnSettingReturnPointWorkingDays> $workingDays
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?ReturnSettingReturnPointAddressCoordinates $addressCoordinates,
        public ?int $id,
        public ?ReturnSettingReturnPointTypeEnum $type,
        public array $workingDays,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            addressCoordinates: OzonDtoValue::object($payload['address_coordinates'] ?? null, ReturnSettingReturnPointAddressCoordinates::class),
            id: OzonDtoValue::int($payload['id'] ?? null),
            type: OzonDtoValue::scalarObject($payload['type'] ?? null, ReturnSettingReturnPointTypeEnum::class),
            workingDays: OzonDtoValue::objectList($payload['working_days'] ?? null, ReturnSettingReturnPointWorkingDays::class),
            extra: OzonDtoValue::extra($payload, ['address', 'address_coordinates', 'id', 'type', 'working_days']),
        );
    }
}
