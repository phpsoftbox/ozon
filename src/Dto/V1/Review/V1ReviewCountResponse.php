<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ReviewCountResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $processed,
        public ?int $total,
        public ?int $unprocessed,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            processed: OzonDtoValue::int($payload['processed'] ?? null),
            total: OzonDtoValue::int($payload['total'] ?? null),
            unprocessed: OzonDtoValue::int($payload['unprocessed'] ?? null),
            extra: OzonDtoValue::extra($payload, ['processed', 'total', 'unprocessed']),
        );
    }
}
