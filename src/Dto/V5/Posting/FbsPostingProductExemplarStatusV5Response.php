<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingProductExemplarStatusV5Response implements OzonDtoInterface
{
    /**
     * @param list<FbsPostingProductExemplarStatusV5Product> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $postingNumber,
        public array $products,
        public ?string $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, FbsPostingProductExemplarStatusV5Product::class),
            status: OzonDtoValue::string($payload['status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['posting_number', 'products', 'status']),
        );
    }
}
