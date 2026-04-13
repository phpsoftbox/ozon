<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingProductExemplarStatusV5Product implements OzonDtoInterface
{
    /**
     * @param list<FbsPostingProductExemplarStatusV5Exemplar> $exemplars
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $exemplars,
        public ?int $productId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            exemplars: OzonDtoValue::objectList($payload['exemplars'] ?? null, FbsPostingProductExemplarStatusV5Exemplar::class),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['exemplars', 'product_id']),
        );
    }
}
