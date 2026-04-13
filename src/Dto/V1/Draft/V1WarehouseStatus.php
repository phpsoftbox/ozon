<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseStatus implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1WarehouseScoringInvalidReason $invalidReason,
        public ?bool $isAvailable,
        public ?V1WarehouseScoringStatus $state,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            invalidReason: OzonDtoValue::object($payload['invalid_reason'] ?? null, V1WarehouseScoringInvalidReason::class),
            isAvailable: OzonDtoValue::bool($payload['is_available'] ?? null),
            state: OzonDtoValue::object($payload['state'] ?? null, V1WarehouseScoringStatus::class),
            extra: OzonDtoValue::extra($payload, ['invalid_reason', 'is_available', 'state']),
        );
    }
}
