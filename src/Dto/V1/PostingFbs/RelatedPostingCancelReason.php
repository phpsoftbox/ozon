<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RelatedPostingCancelReason implements OzonDtoInterface
{
    /**
     * @param list<RelatedPostingCancelReasons> $reasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $postingNumber,
        public array $reasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            reasons: OzonDtoValue::objectList($payload['reasons'] ?? null, RelatedPostingCancelReasons::class),
            extra: OzonDtoValue::extra($payload, ['posting_number', 'reasons']),
        );
    }
}
