<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetSupplyOrderTimeslotStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<V1UpdateTimeslotError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?V1GetSupplyOrderTimeslotStatusResponseStatus $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1UpdateTimeslotError::class),
            status: OzonDtoValue::object($payload['status'] ?? null, V1GetSupplyOrderTimeslotStatusResponseStatus::class),
            extra: OzonDtoValue::extra($payload, ['errors', 'status']),
        );
    }
}
