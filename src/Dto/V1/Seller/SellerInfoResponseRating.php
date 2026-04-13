<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Seller;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SellerInfoResponseRating implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?RatingValueCurrent $currentValue,
        public ?string $name,
        public ?RatingValuePast $pastValue,
        public ?string $rating,
        public ?RatingStatusEnum $status,
        public ?SellerInfoResponseRatingTypeEnum $valueType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            currentValue: OzonDtoValue::object($payload['current_value'] ?? null, RatingValueCurrent::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            pastValue: OzonDtoValue::object($payload['past_value'] ?? null, RatingValuePast::class),
            rating: OzonDtoValue::string($payload['rating'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, RatingStatusEnum::class),
            valueType: OzonDtoValue::object($payload['value_type'] ?? null, SellerInfoResponseRatingTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['current_value', 'name', 'past_value', 'rating', 'status', 'value_type']),
        );
    }
}
