<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RatingSummaryV1ResponseLocalIndex implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $calculationDate,
        public ?int $localizationPercentage,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            calculationDate: OzonDtoValue::string($payload['calculation_date'] ?? null),
            localizationPercentage: OzonDtoValue::int($payload['localization_percentage'] ?? null),
            extra: OzonDtoValue::extra($payload, ['calculation_date', 'localization_percentage']),
        );
    }
}
