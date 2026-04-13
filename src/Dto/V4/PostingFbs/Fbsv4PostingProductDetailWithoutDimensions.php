<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Fbsv4PostingProductDetailWithoutDimensions implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $mandatoryMark
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $mandatoryMark,
        public ?string $name,
        public ?string $offerId,
        public ?string $price,
        public ?int $quantity,
        public ?int $sku,
        public ?string $currencyCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            mandatoryMark: OzonDtoValue::array($payload['mandatory_mark'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::string($payload['price'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            extra: OzonDtoValue::extra($payload, ['mandatory_mark', 'name', 'offer_id', 'price', 'quantity', 'sku', 'currency_code']),
        );
    }
}
