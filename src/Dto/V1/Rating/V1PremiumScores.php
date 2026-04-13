<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PremiumScores implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $scores
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $rating,
        public array $scores,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            rating: OzonDtoValue::string($payload['rating'] ?? null),
            scores: OzonDtoValue::array($payload['scores'] ?? null),
            extra: OzonDtoValue::extra($payload, ['rating', 'scores']),
        );
    }
}
