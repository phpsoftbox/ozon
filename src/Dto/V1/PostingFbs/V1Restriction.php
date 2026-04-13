<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1Restriction implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $postingNumber,
        public ?float $maxPostingWeight,
        public ?float $minPostingWeight,
        public ?float $width,
        public ?float $length,
        public ?float $height,
        public ?float $maxPostingPrice,
        public ?float $minPostingPrice,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            maxPostingWeight: OzonDtoValue::float($payload['max_posting_weight'] ?? null),
            minPostingWeight: OzonDtoValue::float($payload['min_posting_weight'] ?? null),
            width: OzonDtoValue::float($payload['width'] ?? null),
            length: OzonDtoValue::float($payload['length'] ?? null),
            height: OzonDtoValue::float($payload['height'] ?? null),
            maxPostingPrice: OzonDtoValue::float($payload['max_posting_price'] ?? null),
            minPostingPrice: OzonDtoValue::float($payload['min_posting_price'] ?? null),
            extra: OzonDtoValue::extra($payload, ['posting_number', 'max_posting_weight', 'min_posting_weight', 'width', 'length', 'height', 'max_posting_price', 'min_posting_price']),
        );
    }
}
