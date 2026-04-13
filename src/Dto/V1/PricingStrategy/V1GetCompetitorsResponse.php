<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetCompetitorsResponse implements OzonDtoInterface
{
    /**
     * @param list<GetCompetitorsResponseCompetitorInfo> $competitor
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $competitor,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            competitor: OzonDtoValue::objectList($payload['competitor'] ?? null, GetCompetitorsResponseCompetitorInfo::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['competitor', 'total']),
        );
    }
}
