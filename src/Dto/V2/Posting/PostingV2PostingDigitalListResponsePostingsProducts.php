<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV2PostingDigitalListResponsePostingsProducts implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?string $offerId,
        public ?MoneyPostingMoney $price,
        public ?int $quantity,
        public ?int $requiredQtyForDigitalCode,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::object($payload['price'] ?? null, MoneyPostingMoney::class),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            requiredQtyForDigitalCode: OzonDtoValue::int($payload['required_qty_for_digital_code'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['name', 'offer_id', 'price', 'quantity', 'required_qty_for_digital_code', 'sku']),
        );
    }
}
