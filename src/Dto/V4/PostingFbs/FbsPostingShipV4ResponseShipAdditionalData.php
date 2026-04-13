<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingShipV4ResponseShipAdditionalData implements OzonDtoInterface
{
    /**
     * @param list<Fbsv4PostingProductDetailWithoutDimensions> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $postingNumber,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, Fbsv4PostingProductDetailWithoutDimensions::class),
            extra: OzonDtoValue::extra($payload, ['posting_number', 'products']),
        );
    }
}
