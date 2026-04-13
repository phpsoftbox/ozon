<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetRealizationReportPostingResponse implements OzonDtoInterface
{
    /**
     * @param list<V1GetRealizationReportPostingResponseRow> $rows
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetRealizationReportResponseV2Header $header,
        public array $rows,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            header: OzonDtoValue::object($payload['header'] ?? null, GetRealizationReportResponseV2Header::class),
            rows: OzonDtoValue::objectList($payload['rows'] ?? null, V1GetRealizationReportPostingResponseRow::class),
            extra: OzonDtoValue::extra($payload, ['header', 'rows']),
        );
    }
}
