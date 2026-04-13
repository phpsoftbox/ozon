<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsListResponsePostingsOptional implements OzonDtoInterface
{
    /**
     * @param list<string> $productsWithPossibleMandatoryMark
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $productsWithPossibleMandatoryMark,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productsWithPossibleMandatoryMark: OzonDtoValue::array($payload['products_with_possible_mandatory_mark'] ?? null),
            extra: OzonDtoValue::extra($payload, ['products_with_possible_mandatory_mark']),
        );
    }
}
