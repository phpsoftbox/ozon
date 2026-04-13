<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFbsReturnMileCheckResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $unavailabilityReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $shouldSetReturnMile,
        public array $unavailabilityReasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            shouldSetReturnMile: OzonDtoValue::bool($payload['should_set_return_mile'] ?? null),
            unavailabilityReasons: OzonDtoValue::array($payload['unavailability_reasons'] ?? null),
            extra: OzonDtoValue::extra($payload, ['should_set_return_mile', 'unavailability_reasons']),
        );
    }
}
