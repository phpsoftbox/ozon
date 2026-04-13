<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1Competitor implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $coefficient,
        public ?int $competitorId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            coefficient: OzonDtoValue::float($payload['coefficient'] ?? null),
            competitorId: OzonDtoValue::int($payload['competitor_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['coefficient', 'competitor_id']),
        );
    }
}
