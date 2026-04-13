<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetImportProductsInfoResponseResultItem implements OzonDtoInterface
{
    /**
     * @param list<V1ItemError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $offerId,
        public ?int $productId,
        public ?string $status,
        public array $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1ItemError::class),
            extra: OzonDtoValue::extra($payload, ['offer_id', 'product_id', 'status', 'errors']),
        );
    }
}
