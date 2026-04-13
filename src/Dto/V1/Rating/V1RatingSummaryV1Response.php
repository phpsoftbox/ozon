<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1RatingSummaryV1Response implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $groups
     * @param array<array-key, mixed> $localizationIndex
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $groups,
        public array $localizationIndex,
        public ?bool $penaltyScoreExceeded,
        public ?bool $premium,
        public ?bool $premiumPlus,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            groups: OzonDtoValue::array($payload['groups'] ?? null),
            localizationIndex: OzonDtoValue::array($payload['localization_index'] ?? null),
            penaltyScoreExceeded: OzonDtoValue::bool($payload['penalty_score_exceeded'] ?? null),
            premium: OzonDtoValue::bool($payload['premium'] ?? null),
            premiumPlus: OzonDtoValue::bool($payload['premium_plus'] ?? null),
            extra: OzonDtoValue::extra($payload, ['groups', 'localization_index', 'penalty_score_exceeded', 'premium', 'premium_plus']),
        );
    }
}
