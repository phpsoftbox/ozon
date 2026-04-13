<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SupplyOrderStatusCounterResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $count,
        public ?V1OrderState $orderState,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            count: OzonDtoValue::int($payload['count'] ?? null),
            orderState: OzonDtoValue::object($payload['order_state'] ?? null, V1OrderState::class),
            extra: OzonDtoValue::extra($payload, ['count', 'order_state']),
        );
    }
}
