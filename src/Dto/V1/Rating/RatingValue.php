<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;
use PhpSoftBox\Ozon\Dto\V1\Seller\V1RatingStatus;

final readonly class RatingValue implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $dateFrom,
        public ?string $dateTo,
        public ?V1RatingStatus $status,
        public ?float $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dateFrom: OzonDtoValue::string($payload['date_from'] ?? null),
            dateTo: OzonDtoValue::string($payload['date_to'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, V1RatingStatus::class),
            value: OzonDtoValue::float($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['date_from', 'date_to', 'status', 'value']),
        );
    }
}
