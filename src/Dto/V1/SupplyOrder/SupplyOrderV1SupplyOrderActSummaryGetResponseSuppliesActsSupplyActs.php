<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActs implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $actId,
        public ?string $actNumber,
        public ?SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsActStateEnum $actState,
        public ?string $createdDate,
        public ?string $deadlineUtc,
        public ?SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsSummary $summary,
        public ?SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actId: OzonDtoValue::int($payload['act_id'] ?? null),
            actNumber: OzonDtoValue::string($payload['act_number'] ?? null),
            actState: OzonDtoValue::scalarObject($payload['act_state'] ?? null, SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsActStateEnum::class),
            createdDate: OzonDtoValue::string($payload['created_date'] ?? null),
            deadlineUtc: OzonDtoValue::string($payload['deadline_utc'] ?? null),
            summary: OzonDtoValue::object($payload['summary'] ?? null, SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsSummary::class),
            type: OzonDtoValue::scalarObject($payload['type'] ?? null, SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActsTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['act_id', 'act_number', 'act_state', 'created_date', 'deadline_utc', 'summary', 'type']),
        );
    }
}
