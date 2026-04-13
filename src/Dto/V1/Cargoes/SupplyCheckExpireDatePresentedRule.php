<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyCheckExpireDatePresentedRule implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $countSkuWithExpiration,
        public ?int $countSkuWithExpirationFilled,
        public ?bool $isApplicable,
        public ?bool $isRequired,
        public ?bool $satisfied,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            countSkuWithExpiration: OzonDtoValue::int($payload['count_sku_with_expiration'] ?? null),
            countSkuWithExpirationFilled: OzonDtoValue::int($payload['count_sku_with_expiration_filled'] ?? null),
            isApplicable: OzonDtoValue::bool($payload['is_applicable'] ?? null),
            isRequired: OzonDtoValue::bool($payload['is_required'] ?? null),
            satisfied: OzonDtoValue::bool($payload['satisfied'] ?? null),
            extra: OzonDtoValue::extra($payload, ['count_sku_with_expiration', 'count_sku_with_expiration_filled', 'is_applicable', 'is_required', 'satisfied']),
        );
    }
}
