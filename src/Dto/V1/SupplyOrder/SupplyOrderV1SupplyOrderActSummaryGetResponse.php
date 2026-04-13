<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActSummaryGetResponse implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActs> $suppliesActs
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $suppliesActs,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            suppliesActs: OzonDtoValue::objectList($payload['supplies_acts'] ?? null, SupplyOrderV1SupplyOrderActSummaryGetResponseSuppliesActs::class),
            extra: OzonDtoValue::extra($payload, ['supplies_acts']),
        );
    }
}
