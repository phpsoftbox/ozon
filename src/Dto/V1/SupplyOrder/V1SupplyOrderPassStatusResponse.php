<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SupplyOrderPassStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<V1SetVehicleError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?V1SupplyOrderPassStatusResponseStatus $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1SetVehicleError::class),
            result: OzonDtoValue::object($payload['result'] ?? null, V1SupplyOrderPassStatusResponseStatus::class),
            extra: OzonDtoValue::extra($payload, ['errors', 'result']),
        );
    }
}
