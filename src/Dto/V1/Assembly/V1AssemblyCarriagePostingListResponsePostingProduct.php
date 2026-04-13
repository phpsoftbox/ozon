<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Assembly;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AssemblyCarriagePostingListResponsePostingProduct implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $offerId,
        public ?string $pictureUrl,
        public ?string $productName,
        public ?int $quantity,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            pictureUrl: OzonDtoValue::string($payload['picture_url'] ?? null),
            productName: OzonDtoValue::string($payload['product_name'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['offer_id', 'picture_url', 'product_name', 'quantity', 'sku']),
        );
    }
}
