<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseAvailabilityStatus implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?AvailabilityStatusInvalidReasonEnum $invalidReason,
        public ?AvailabilityStatusStateEnum $state,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            invalidReason: OzonDtoValue::object($payload['invalid_reason'] ?? null, AvailabilityStatusInvalidReasonEnum::class),
            state: OzonDtoValue::object($payload['state'] ?? null, AvailabilityStatusStateEnum::class),
            extra: OzonDtoValue::extra($payload, ['invalid_reason', 'state']),
        );
    }
}
