<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Order;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1OrderCancelCheckResponse implements OzonDtoInterface
{
    /**
     * @param list<OrderCancelCheckResponsePostingGroup> $postingGroups
     * @param list<OrderCancelCheckResponsePosting> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $cancellable,
        public ?string $orderNumber,
        public array $postingGroups,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cancellable: OzonDtoValue::bool($payload['cancellable'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingGroups: OzonDtoValue::objectList($payload['posting_groups'] ?? null, OrderCancelCheckResponsePostingGroup::class),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, OrderCancelCheckResponsePosting::class),
            extra: OzonDtoValue::extra($payload, ['cancellable', 'order_number', 'posting_groups', 'postings']),
        );
    }
}
