<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PremiumScoresScore implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $date,
        public ?float $ratingValue,
        public ?int $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            date: OzonDtoValue::string($payload['date'] ?? null),
            ratingValue: OzonDtoValue::float($payload['rating_value'] ?? null),
            value: OzonDtoValue::int($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['date', 'rating_value', 'value']),
        );
    }
}
