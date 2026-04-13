<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3SupplyOrderListResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $orderIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $lastId,
        public array $orderIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            orderIds: OzonDtoValue::array($payload['order_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['last_id', 'order_ids']),
        );
    }
}
