<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FinanceCashFlowStatementListResponseResult implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $cashFlows
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $cashFlows,
        public ?FinanceCashFlowStatementListResponseDetails $details,
        public ?int $pageCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cashFlows: OzonDtoValue::array($payload['cash_flows'] ?? null),
            details: OzonDtoValue::object($payload['details'] ?? null, FinanceCashFlowStatementListResponseDetails::class),
            pageCount: OzonDtoValue::int($payload['page_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cash_flows', 'details', 'page_count']),
        );
    }
}
