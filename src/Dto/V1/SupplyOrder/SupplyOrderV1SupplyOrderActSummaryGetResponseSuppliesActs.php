<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActs implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActs> $supplyActs
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isAgreementCompleted,
        public array $supplyActs,
        public ?int $supplyId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isAgreementCompleted: OzonDtoValue::bool($payload['is_agreement_completed'] ?? null),
            supplyActs: OzonDtoValue::objectList($payload['supply_acts'] ?? null, SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActsSupplyActs::class),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_agreement_completed', 'supply_acts', 'supply_id']),
        );
    }
}
