<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingUnpaidLegalProductListResponseProducts implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $productId,
        public ?string $offerId,
        public ?int $quantity,
        public ?string $name,
        public ?string $imageUrl,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            imageUrl: OzonDtoValue::string($payload['image_url'] ?? null),
            extra: OzonDtoValue::extra($payload, ['product_id', 'offer_id', 'quantity', 'name', 'image_url']),
        );
    }
}
