<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingProductExemplarValidateV5Response implements OzonDtoInterface
{
    /**
     * @param list<FbsPostingProductExemplarValidateV5Product> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            products: OzonDtoValue::objectList($payload['products'] ?? null, FbsPostingProductExemplarValidateV5Product::class),
            extra: OzonDtoValue::extra($payload, ['products']),
        );
    }
}
