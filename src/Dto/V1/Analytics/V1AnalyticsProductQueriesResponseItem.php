<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AnalyticsProductQueriesResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $category,
        public ?string $currency,
        public ?float $gmv,
        public ?string $name,
        public ?string $offerId,
        public ?float $position,
        public ?int $sku,
        public ?int $uniqueSearchUsers,
        public ?int $uniqueViewUsers,
        public ?float $viewConversion,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            category: OzonDtoValue::string($payload['category'] ?? null),
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            gmv: OzonDtoValue::float($payload['gmv'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            position: OzonDtoValue::float($payload['position'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            uniqueSearchUsers: OzonDtoValue::int($payload['unique_search_users'] ?? null),
            uniqueViewUsers: OzonDtoValue::int($payload['unique_view_users'] ?? null),
            viewConversion: OzonDtoValue::float($payload['view_conversion'] ?? null),
            extra: OzonDtoValue::extra($payload, ['category', 'currency', 'gmv', 'name', 'offer_id', 'position', 'sku', 'unique_search_users', 'unique_view_users', 'view_conversion']),
        );
    }
}
