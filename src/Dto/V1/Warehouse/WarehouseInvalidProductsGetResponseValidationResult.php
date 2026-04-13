<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseInvalidProductsGetResponseValidationResult implements OzonDtoInterface
{
    /**
     * @param list<ValidationResultValidationError> $validationErrors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ValidationResultItem $item,
        public ?ValidationResultItemStateEnum $state,
        public array $validationErrors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            item: OzonDtoValue::object($payload['item'] ?? null, ValidationResultItem::class),
            state: OzonDtoValue::object($payload['state'] ?? null, ValidationResultItemStateEnum::class),
            validationErrors: OzonDtoValue::objectList($payload['validation_errors'] ?? null, ValidationResultValidationError::class),
            extra: OzonDtoValue::extra($payload, ['item', 'state', 'validation_errors']),
        );
    }
}
