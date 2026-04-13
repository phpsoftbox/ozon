<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseInvalidProductsGetResponse implements OzonDtoInterface
{
    /**
     * @param list<WarehouseInvalidProductsGetResponseValidationResult> $validationResults
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public ?int $lastId,
        public array $validationResults,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            lastId: OzonDtoValue::int($payload['last_id'] ?? null),
            validationResults: OzonDtoValue::objectList($payload['validation_results'] ?? null, WarehouseInvalidProductsGetResponseValidationResult::class),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['has_next', 'last_id', 'validation_results', 'warehouse_id']),
        );
    }
}
