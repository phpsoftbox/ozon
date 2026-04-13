<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActProductGetResponse implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderV1SupplyOrderActProductGetResponseSkusDefects> $skusDefects
     * @param list<SupplyOrderV1SupplyOrderActProductGetResponseSupplyActs> $supplyActs
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $skusDefects,
        public array $supplyActs,
        public ?int $supplyId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            skusDefects: OzonDtoValue::objectList($payload['skus_defects'] ?? null, SupplyOrderV1SupplyOrderActProductGetResponseSkusDefects::class),
            supplyActs: OzonDtoValue::objectList($payload['supply_acts'] ?? null, SupplyOrderV1SupplyOrderActProductGetResponseSupplyActs::class),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['skus_defects', 'supply_acts', 'supply_id']),
        );
    }
}
