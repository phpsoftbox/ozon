<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingProductExemplarValidateV5Product implements OzonDtoInterface
{
    /**
     * @param list<FbsPostingProductExemplarValidateV5Exemplar> $exemplars
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $error,
        public array $exemplars,
        public ?int $productId,
        public ?bool $valid,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::string($payload['error'] ?? null),
            exemplars: OzonDtoValue::objectList($payload['exemplars'] ?? null, FbsPostingProductExemplarValidateV5Exemplar::class),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            valid: OzonDtoValue::bool($payload['valid'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error', 'exemplars', 'product_id', 'valid']),
        );
    }
}
