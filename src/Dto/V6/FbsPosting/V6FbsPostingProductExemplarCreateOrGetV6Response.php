<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V6\FbsPosting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V6FbsPostingProductExemplarCreateOrGetV6Response implements OzonDtoInterface
{
    /**
     * @param list<FbsPostingProductExemplarCreateOrGetV6ResponseProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $multiBoxQty,
        public ?string $postingNumber,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            multiBoxQty: OzonDtoValue::int($payload['multi_box_qty'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, FbsPostingProductExemplarCreateOrGetV6ResponseProduct::class),
            extra: OzonDtoValue::extra($payload, ['multi_box_qty', 'posting_number', 'products']),
        );
    }
}
