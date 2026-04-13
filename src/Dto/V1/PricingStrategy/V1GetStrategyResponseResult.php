<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetStrategyResponseResult implements OzonDtoInterface
{
    /**
     * @param list<V1Competitor> $competitors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $competitors,
        public ?bool $enabled,
        public ?string $name,
        public ?string $type,
        public ?string $updateType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            competitors: OzonDtoValue::objectList($payload['competitors'] ?? null, V1Competitor::class),
            enabled: OzonDtoValue::bool($payload['enabled'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            type: OzonDtoValue::string($payload['type'] ?? null),
            updateType: OzonDtoValue::string($payload['update_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['competitors', 'enabled', 'name', 'type', 'update_type']),
        );
    }
}
