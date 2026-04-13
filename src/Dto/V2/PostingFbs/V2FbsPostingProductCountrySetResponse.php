<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2FbsPostingProductCountrySetResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $productId,
        public ?bool $isGtdNeeded,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            isGtdNeeded: OzonDtoValue::bool($payload['is_gtd_needed'] ?? null),
            extra: OzonDtoValue::extra($payload, ['product_id', 'is_gtd_needed']),
        );
    }
}
