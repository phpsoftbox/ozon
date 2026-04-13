<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetWarehouseFBSOperationStatusResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetWarehouseFBSOperationStatusResponseError $error,
        public ?GetWarehouseFBSOperationStatusResponseResult $result,
        public ?GetWarehouseFBSOperationStatusResponseStatusEnum $status,
        public ?GetWarehouseFBSOperationStatusResponseTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::object($payload['error'] ?? null, GetWarehouseFBSOperationStatusResponseError::class),
            result: OzonDtoValue::object($payload['result'] ?? null, GetWarehouseFBSOperationStatusResponseResult::class),
            status: OzonDtoValue::object($payload['status'] ?? null, GetWarehouseFBSOperationStatusResponseStatusEnum::class),
            type: OzonDtoValue::object($payload['type'] ?? null, GetWarehouseFBSOperationStatusResponseTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['error', 'result', 'status', 'type']),
        );
    }
}
