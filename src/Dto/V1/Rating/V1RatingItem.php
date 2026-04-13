<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1RatingItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?RatingItemChange $change,
        public ?float $currentValue,
        public ?string $name,
        public ?float $pastValue,
        public ?string $rating,
        public ?string $ratingDirection,
        public ?string $status,
        public ?string $valueType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            change: OzonDtoValue::object($payload['change'] ?? null, RatingItemChange::class),
            currentValue: OzonDtoValue::float($payload['current_value'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            pastValue: OzonDtoValue::float($payload['past_value'] ?? null),
            rating: OzonDtoValue::string($payload['rating'] ?? null),
            ratingDirection: OzonDtoValue::string($payload['rating_direction'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            valueType: OzonDtoValue::string($payload['value_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['change', 'current_value', 'name', 'past_value', 'rating', 'rating_direction', 'status', 'value_type']),
        );
    }
}
