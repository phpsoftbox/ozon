<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductImportProductsBySKUResponseResult implements OzonDtoInterface
{
    /**
     * @param list<int> $unmatchedSkuList
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $taskId,
        public array $unmatchedSkuList,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            taskId: OzonDtoValue::int($payload['task_id'] ?? null),
            unmatchedSkuList: OzonDtoValue::array($payload['unmatched_sku_list'] ?? null),
            extra: OzonDtoValue::extra($payload, ['task_id', 'unmatched_sku_list']),
        );
    }
}
