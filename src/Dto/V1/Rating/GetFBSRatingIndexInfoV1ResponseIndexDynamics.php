<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetFBSRatingIndexInfoV1ResponseIndexDynamics implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $date,
        public ?float $indexByDate,
        public ?float $processingCostsSumByDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            date: OzonDtoValue::string($payload['date'] ?? null),
            indexByDate: OzonDtoValue::float($payload['index_by_date'] ?? null),
            processingCostsSumByDate: OzonDtoValue::float($payload['processing_costs_sum_by_date'] ?? null),
            extra: OzonDtoValue::extra($payload, ['date', 'index_by_date', 'processing_costs_sum_by_date']),
        );
    }
}
