<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Assembly;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AssemblyCarriageProductListResponseProduct implements OzonDtoInterface
{
    /**
     * @param list<string> $postingNumbers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $offerId,
        public ?string $pictureUrl,
        public array $postingNumbers,
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
            postingNumbers: OzonDtoValue::array($payload['posting_numbers'] ?? null),
            productName: OzonDtoValue::string($payload['product_name'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['offer_id', 'picture_url', 'posting_numbers', 'product_name', 'quantity', 'sku']),
        );
    }
}
