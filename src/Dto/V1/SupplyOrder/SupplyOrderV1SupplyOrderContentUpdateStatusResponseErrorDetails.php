<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderContentUpdateStatusResponseErrorDetails implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderV1SupplyOrderContentUpdateStatusResponseErrorDetailsErrorDetailsCodeEnum> $code
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $backupSupplyId,
        public array $code,
        public ?int $itemsQuantityLimit,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            backupSupplyId: OzonDtoValue::int($payload['backup_supply_id'] ?? null),
            code: OzonDtoValue::scalarObjectList($payload['code'] ?? null, SupplyOrderV1SupplyOrderContentUpdateStatusResponseErrorDetailsErrorDetailsCodeEnum::class),
            itemsQuantityLimit: OzonDtoValue::int($payload['items_quantity_limit'] ?? null),
            extra: OzonDtoValue::extra($payload, ['backup_supply_id', 'code', 'items_quantity_limit']),
        );
    }
}
