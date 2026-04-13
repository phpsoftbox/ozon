<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1QuantInfoResponseResultItems implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $offerId,
        public ?int $productId,
        public ?ProductV1QuantInfoResponseResultItemsQuantInfo $quantInfo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quantInfo: OzonDtoValue::object($payload['quant_info'] ?? null, ProductV1QuantInfoResponseResultItemsQuantInfo::class),
            extra: OzonDtoValue::extra($payload, ['offer_id', 'product_id', 'quant_info']),
        );
    }
}
