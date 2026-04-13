<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Supplier;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SupplierAvailableWarehousesResponse implements OzonDtoInterface
{
    /**
     * @param list<SupplierAvailableWarehousesResponseResult> $result
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::objectList($payload['result'] ?? null, SupplierAvailableWarehousesResponseResult::class),
            extra: OzonDtoValue::extra($payload, ['result']),
        );
    }
}
