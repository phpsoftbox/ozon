<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Report;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReportListResponseResult implements OzonDtoInterface
{
    /**
     * @param list<ReportReport> $reports
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $reports,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            reports: OzonDtoValue::objectList($payload['reports'] ?? null, ReportReport::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['reports', 'total']),
        );
    }
}
