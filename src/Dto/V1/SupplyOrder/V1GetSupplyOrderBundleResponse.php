<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetSupplyOrderBundleResponse implements OzonDtoInterface
{
    /**
     * @param list<V1ItemResponse> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public ?int $totalCount,
        public ?bool $hasNext,
        public ?string $lastId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: OzonDtoValue::objectList($payload['items'] ?? null, V1ItemResponse::class),
            totalCount: OzonDtoValue::int($payload['total_count'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['items', 'total_count', 'has_next', 'last_id']),
        );
    }
}
