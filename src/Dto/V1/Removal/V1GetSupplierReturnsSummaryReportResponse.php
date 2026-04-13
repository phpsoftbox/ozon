<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Removal;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetSupplierReturnsSummaryReportResponse implements OzonDtoInterface
{
    /**
     * @param list<V1GetSupplierReturnsSummaryReportResponseRow> $returnsSummaryReportRows
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $lastId,
        public array $returnsSummaryReportRows,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            returnsSummaryReportRows: OzonDtoValue::objectList($payload['returns_summary_report_rows'] ?? null, V1GetSupplierReturnsSummaryReportResponseRow::class),
            extra: OzonDtoValue::extra($payload, ['last_id', 'returns_summary_report_rows']),
        );
    }
}
