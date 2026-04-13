<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ErrorItemsValidation implements OzonDtoInterface
{
    /**
     * @param list<ItemsValidationRejectedItems> $rejectedItems
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $limit,
        public ?int $macrolocalClusterId,
        public ?int $supplyId,
        public array $rejectedItems,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            limit: OzonDtoValue::int($payload['limit'] ?? null),
            macrolocalClusterId: OzonDtoValue::int($payload['macrolocal_cluster_id'] ?? null),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            rejectedItems: OzonDtoValue::objectList($payload['rejected_items'] ?? null, ItemsValidationRejectedItems::class),
            extra: OzonDtoValue::extra($payload, ['limit', 'macrolocal_cluster_id', 'supply_id', 'rejected_items']),
        );
    }
}
