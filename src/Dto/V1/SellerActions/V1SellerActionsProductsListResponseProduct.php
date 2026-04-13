<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SellerActions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SellerActionsProductsListResponseProduct implements OzonDtoInterface
{
    /**
     * @param list<string> $sku
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $actionPrice,
        public ?float $basePrice,
        public ?string $currency,
        public ?float $discountPercent,
        public ?bool $isActive,
        public ?float $minSellerPrice,
        public ?string $name,
        public ?string $offerId,
        public ?float $price,
        public ?int $productId,
        public ?int $quantSize,
        public ?V1SellerActionsProductsCandidatesResponseProductQuantTypeEnum $quantType,
        public array $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actionPrice: OzonDtoValue::float($payload['action_price'] ?? null),
            basePrice: OzonDtoValue::float($payload['base_price'] ?? null),
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            discountPercent: OzonDtoValue::float($payload['discount_percent'] ?? null),
            isActive: OzonDtoValue::bool($payload['is_active'] ?? null),
            minSellerPrice: OzonDtoValue::float($payload['min_seller_price'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quantSize: OzonDtoValue::int($payload['quant_size'] ?? null),
            quantType: OzonDtoValue::object($payload['quant_type'] ?? null, V1SellerActionsProductsCandidatesResponseProductQuantTypeEnum::class),
            sku: OzonDtoValue::array($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['action_price', 'base_price', 'currency', 'discount_percent', 'is_active', 'min_seller_price', 'name', 'offer_id', 'price', 'product_id', 'quant_size', 'quant_type', 'sku']),
        );
    }
}
