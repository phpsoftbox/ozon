<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActProductGetResponseSupplyActs implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItems> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $actId,
        public array $items,
        public ?SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsTypeEnum $type,
        public ?int $unidentifiedQuantity,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actId: OzonDtoValue::int($payload['act_id'] ?? null),
            items: OzonDtoValue::objectList($payload['items'] ?? null, SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsItems::class),
            type: OzonDtoValue::scalarObject($payload['type'] ?? null, SupplyOrderV1SupplyOrderActProductGetResponseSupplyActsTypeEnum::class),
            unidentifiedQuantity: OzonDtoValue::int($payload['unidentified_quantity'] ?? null),
            extra: OzonDtoValue::extra($payload, ['act_id', 'items', 'type', 'unidentified_quantity']),
        );
    }
}
