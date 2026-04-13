<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DraftSupplyCreateStatusResponseResult implements OzonDtoInterface
{
    /**
     * @param list<string> $orderIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $orderIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderIds: OzonDtoValue::array($payload['order_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['order_ids']),
        );
    }
}
