<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2PostingFBSActGetPostingsResult implements OzonDtoInterface
{
    /**
     * @param list<V2PostingFBSActGetProducts> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?int $multiBoxQty,
        public ?string $postingNumber,
        public ?string $status,
        public ?string $sellerError,
        public ?string $updatedAt,
        public ?string $createdAt,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            multiBoxQty: OzonDtoValue::int($payload['multi_box_qty'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            sellerError: OzonDtoValue::string($payload['seller_error'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, V2PostingFBSActGetProducts::class),
            extra: OzonDtoValue::extra($payload, ['id', 'multi_box_qty', 'posting_number', 'status', 'seller_error', 'updated_at', 'created_at', 'products']),
        );
    }
}
