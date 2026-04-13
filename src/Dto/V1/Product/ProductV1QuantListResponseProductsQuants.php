<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1QuantListResponseProductsQuants implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $quantCode,
        public ?int $quantSize,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            quantCode: OzonDtoValue::string($payload['quant_code'] ?? null),
            quantSize: OzonDtoValue::int($payload['quant_size'] ?? null),
            extra: OzonDtoValue::extra($payload, ['quant_code', 'quant_size']),
        );
    }
}
