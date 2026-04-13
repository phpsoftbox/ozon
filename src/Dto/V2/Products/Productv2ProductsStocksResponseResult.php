<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Products;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Productv2ProductsStocksResponseResult implements OzonDtoInterface
{
    /**
     * @param list<Productv2ProductsStocksResponseError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?string $offerId,
        public ?int $productId,
        public ?bool $updated,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, Productv2ProductsStocksResponseError::class),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            updated: OzonDtoValue::bool($payload['updated'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors', 'offer_id', 'product_id', 'updated', 'warehouse_id']),
        );
    }
}
