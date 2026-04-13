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
     * @param list<RatingSummaryV1ResponseGroup> $groups
     * @param list<RatingSummaryV1ResponseLocalIndex> $localizationIndex
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
            groups: OzonDtoValue::objectList($payload['groups'] ?? null, RatingSummaryV1ResponseGroup::class),
            localizationIndex: OzonDtoValue::objectList($payload['localization_index'] ?? null, RatingSummaryV1ResponseLocalIndex::class),
            penaltyScoreExceeded: OzonDtoValue::bool($payload['penalty_score_exceeded'] ?? null),
            premium: OzonDtoValue::bool($payload['premium'] ?? null),
            premiumPlus: OzonDtoValue::bool($payload['premium_plus'] ?? null),
            extra: OzonDtoValue::extra($payload, ['groups', 'localization_index', 'penalty_score_exceeded', 'premium', 'premium_plus']),
        );
    }
}
