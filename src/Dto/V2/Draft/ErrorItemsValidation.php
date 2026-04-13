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
        public ?int $macrolocalClusterId,
        public array $rejectedItems,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            macrolocalClusterId: OzonDtoValue::int($payload['macrolocal_cluster_id'] ?? null),
            rejectedItems: OzonDtoValue::objectList($payload['rejected_items'] ?? null, ItemsValidationRejectedItems::class),
            extra: OzonDtoValue::extra($payload, ['macrolocal_cluster_id', 'rejected_items']),
        );
    }
}
