<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SellerApiGetSellerProductV1ResponseResult implements OzonDtoInterface
{
    /**
     * @param list<SellerApiProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $products,
        public ?float $total,
        public ?float $lastId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            products: OzonDtoValue::objectList($payload['products'] ?? null, SellerApiProduct::class),
            total: OzonDtoValue::float($payload['total'] ?? null),
            lastId: OzonDtoValue::float($payload['last_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['products', 'total', 'last_id']),
        );
    }
}
