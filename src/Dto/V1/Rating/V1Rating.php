<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1Rating implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $values
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $dangerThreshold,
        public ?float $premiumThreshold,
        public ?string $rating,
        public array $values,
        public ?float $warningThreshold,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dangerThreshold: OzonDtoValue::float($payload['danger_threshold'] ?? null),
            premiumThreshold: OzonDtoValue::float($payload['premium_threshold'] ?? null),
            rating: OzonDtoValue::string($payload['rating'] ?? null),
            values: OzonDtoValue::array($payload['values'] ?? null),
            warningThreshold: OzonDtoValue::float($payload['warning_threshold'] ?? null),
            extra: OzonDtoValue::extra($payload, ['danger_threshold', 'premium_threshold', 'rating', 'values', 'warning_threshold']),
        );
    }
}
