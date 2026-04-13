<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class TaskAutoModeratedInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $maxPercent,
        public ?float $maxPrice,
        public ?float $minPercent,
        public ?float $minPrice,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            maxPercent: OzonDtoValue::float($payload['max_percent'] ?? null),
            maxPrice: OzonDtoValue::float($payload['max_price'] ?? null),
            minPercent: OzonDtoValue::float($payload['min_percent'] ?? null),
            minPrice: OzonDtoValue::float($payload['min_price'] ?? null),
            extra: OzonDtoValue::extra($payload, ['max_percent', 'max_price', 'min_percent', 'min_price']),
        );
    }
}
