<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyTags implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isEttnRequired,
        public ?bool $isEvsdRequired,
        public ?bool $isJewelry,
        public ?bool $isMarkingPossible,
        public ?bool $isMarkingRequired,
        public ?bool $isUtd,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isEttnRequired: OzonDtoValue::bool($payload['is_ettn_required'] ?? null),
            isEvsdRequired: OzonDtoValue::bool($payload['is_evsd_required'] ?? null),
            isJewelry: OzonDtoValue::bool($payload['is_jewelry'] ?? null),
            isMarkingPossible: OzonDtoValue::bool($payload['is_marking_possible'] ?? null),
            isMarkingRequired: OzonDtoValue::bool($payload['is_marking_required'] ?? null),
            isUtd: OzonDtoValue::bool($payload['is_utd'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_ettn_required', 'is_evsd_required', 'is_jewelry', 'is_marking_possible', 'is_marking_required', 'is_utd']),
        );
    }
}
