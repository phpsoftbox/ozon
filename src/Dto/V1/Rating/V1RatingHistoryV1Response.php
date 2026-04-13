<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1RatingHistoryV1Response implements OzonDtoInterface
{
    /**
     * @param list<V1PremiumScores> $premiumScores
     * @param list<V1Rating> $ratings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $premiumScores,
        public array $ratings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            premiumScores: OzonDtoValue::objectList($payload['premium_scores'] ?? null, V1PremiumScores::class),
            ratings: OzonDtoValue::objectList($payload['ratings'] ?? null, V1Rating::class),
            extra: OzonDtoValue::extra($payload, ['premium_scores', 'ratings']),
        );
    }
}
