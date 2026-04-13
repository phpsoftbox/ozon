<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SupplyOrderCancelStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderCancelStatusResponseCancelOrderError> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public ?SupplyOrderCancelStatusResponseResult $result,
        public ?V1SupplyOrderCancelStatusResponseStatus $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::objectList($payload['error_reasons'] ?? null, SupplyOrderCancelStatusResponseCancelOrderError::class),
            result: OzonDtoValue::object($payload['result'] ?? null, SupplyOrderCancelStatusResponseResult::class),
            status: OzonDtoValue::object($payload['status'] ?? null, V1SupplyOrderCancelStatusResponseStatus::class),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'result', 'status']),
        );
    }
}
