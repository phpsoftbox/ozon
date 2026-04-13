<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1PostingFbpListResponsePostingsFinancialDataProductsActions implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $actionId,
        public ?string $dateFrom,
        public ?string $dateTo,
        public ?float $discountPercent,
        public ?float $discountValue,
        public ?bool $isFromSeller,
        public ?string $description,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actionId: OzonDtoValue::string($payload['action_id'] ?? null),
            dateFrom: OzonDtoValue::string($payload['date_from'] ?? null),
            dateTo: OzonDtoValue::string($payload['date_to'] ?? null),
            discountPercent: OzonDtoValue::float($payload['discount_percent'] ?? null),
            discountValue: OzonDtoValue::float($payload['discount_value'] ?? null),
            isFromSeller: OzonDtoValue::bool($payload['is_from_seller'] ?? null),
            description: OzonDtoValue::string($payload['description'] ?? null),
            extra: OzonDtoValue::extra($payload, ['action_id', 'date_from', 'date_to', 'discount_percent', 'discount_value', 'is_from_seller', 'description']),
        );
    }
}
