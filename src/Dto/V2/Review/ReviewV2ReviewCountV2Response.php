<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReviewV2ReviewCountV2Response implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $new,
        public ?int $processed,
        public ?int $total,
        public ?int $viewed,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            new: OzonDtoValue::int($payload['new'] ?? null),
            processed: OzonDtoValue::int($payload['processed'] ?? null),
            total: OzonDtoValue::int($payload['total'] ?? null),
            viewed: OzonDtoValue::int($payload['viewed'] ?? null),
            extra: OzonDtoValue::extra($payload, ['new', 'processed', 'total', 'viewed']),
        );
    }
}
