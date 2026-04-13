<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetFBSRatingIndexInfoV1Response implements OzonDtoInterface
{
    /**
     * @param list<GetFBSRatingIndexInfoV1ResponseIndexDynamics> $defects
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $currencyCode,
        public array $defects,
        public ?float $index,
        public ?string $periodFrom,
        public ?string $periodTo,
        public ?float $processingCostsSum,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            defects: OzonDtoValue::objectList($payload['defects'] ?? null, GetFBSRatingIndexInfoV1ResponseIndexDynamics::class),
            index: OzonDtoValue::float($payload['index'] ?? null),
            periodFrom: OzonDtoValue::string($payload['period_from'] ?? null),
            periodTo: OzonDtoValue::string($payload['period_to'] ?? null),
            processingCostsSum: OzonDtoValue::float($payload['processing_costs_sum'] ?? null),
            extra: OzonDtoValue::extra($payload, ['currency_code', 'defects', 'index', 'period_from', 'period_to', 'processing_costs_sum']),
        );
    }
}
