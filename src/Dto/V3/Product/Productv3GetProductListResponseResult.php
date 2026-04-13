<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Productv3GetProductListResponseResult implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public ?string $lastId,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: OzonDtoValue::array($payload['items'] ?? null),
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['items', 'last_id', 'total']),
        );
    }
}
