<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetRealizationReportByDayResponse implements OzonDtoInterface
{
    /**
     * @param list<GetRealizationReportByDayResponseRow> $rows
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $rows,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            rows: OzonDtoValue::objectList($payload['rows'] ?? null, GetRealizationReportByDayResponseRow::class),
            extra: OzonDtoValue::extra($payload, ['rows']),
        );
    }
}
