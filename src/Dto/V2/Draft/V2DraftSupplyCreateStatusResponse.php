<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2DraftSupplyCreateStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<V2DraftSupplyCreateStatusResponseErrorReasonEnum> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public ?int $orderId,
        public ?V2DraftSupplyCreateStatusResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::objectList($payload['error_reasons'] ?? null, V2DraftSupplyCreateStatusResponseErrorReasonEnum::class),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, V2DraftSupplyCreateStatusResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'order_id', 'status']),
        );
    }
}
