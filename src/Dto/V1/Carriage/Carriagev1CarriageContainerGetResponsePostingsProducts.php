<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerGetResponsePostingsProducts implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $sku,
        public ?string $name,
        public ?string $offerId,
        public ?int $quantity,
        public ?string $pictureUrl,
        public ?string $productColor,
        public ?string $productSizeManufacturer,
        public ?string $productSizeRussian,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            pictureUrl: OzonDtoValue::string($payload['picture_url'] ?? null),
            productColor: OzonDtoValue::string($payload['product_color'] ?? null),
            productSizeManufacturer: OzonDtoValue::string($payload['product_size_manufacturer'] ?? null),
            productSizeRussian: OzonDtoValue::string($payload['product_size_russian'] ?? null),
            extra: OzonDtoValue::extra($payload, ['sku', 'name', 'offer_id', 'quantity', 'picture_url', 'product_color', 'product_size_manufacturer', 'product_size_russian']),
        );
    }
}
