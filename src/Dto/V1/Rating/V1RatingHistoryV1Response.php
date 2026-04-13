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
     * @param array<array-key, mixed> $premiumScores
     * @param array<array-key, mixed> $ratings
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
            premiumScores: OzonDtoValue::array($payload['premium_scores'] ?? null),
            ratings: OzonDtoValue::array($payload['ratings'] ?? null),
            extra: OzonDtoValue::extra($payload, ['premium_scores', 'ratings']),
        );
    }
}
