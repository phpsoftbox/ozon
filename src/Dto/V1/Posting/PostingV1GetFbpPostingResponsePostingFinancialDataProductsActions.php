<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1GetFbpPostingResponsePostingFinancialDataProductsActions implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $actionId,
        public ?string $actionType,
        public ?string $dateFrom,
        public ?string $dateTo,
        public ?string $description,
        public ?float $discountPercent,
        public ?float $discountValue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actionId: OzonDtoValue::int($payload['action_id'] ?? null),
            actionType: OzonDtoValue::string($payload['action_type'] ?? null),
            dateFrom: OzonDtoValue::string($payload['date_from'] ?? null),
            dateTo: OzonDtoValue::string($payload['date_to'] ?? null),
            description: OzonDtoValue::string($payload['description'] ?? null),
            discountPercent: OzonDtoValue::float($payload['discount_percent'] ?? null),
            discountValue: OzonDtoValue::float($payload['discount_value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['action_id', 'action_type', 'date_from', 'date_to', 'description', 'discount_percent', 'discount_value']),
        );
    }
}
