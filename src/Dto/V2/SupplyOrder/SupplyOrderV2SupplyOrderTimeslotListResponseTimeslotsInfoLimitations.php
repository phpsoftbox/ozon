<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfoLimitations implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $changesCount,
        public ?int $changesLimit,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            changesCount: OzonDtoValue::int($payload['changes_count'] ?? null),
            changesLimit: OzonDtoValue::int($payload['changes_limit'] ?? null),
            extra: OzonDtoValue::extra($payload, ['changes_count', 'changes_limit']),
        );
    }
}
