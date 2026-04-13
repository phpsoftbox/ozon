<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetStrategyListResponseStrategy implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $id,
        public ?string $name,
        public ?string $type,
        public ?string $updateType,
        public ?string $updatedAt,
        public ?int $productsCount,
        public ?int $competitorsCount,
        public ?bool $enabled,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::string($payload['id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            type: OzonDtoValue::string($payload['type'] ?? null),
            updateType: OzonDtoValue::string($payload['update_type'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            productsCount: OzonDtoValue::int($payload['products_count'] ?? null),
            competitorsCount: OzonDtoValue::int($payload['competitors_count'] ?? null),
            enabled: OzonDtoValue::bool($payload['enabled'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'name', 'type', 'update_type', 'updated_at', 'products_count', 'competitors_count', 'enabled']),
        );
    }
}
