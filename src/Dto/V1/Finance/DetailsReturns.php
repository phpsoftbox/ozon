<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DetailsReturns implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $total,
        public ?FinanceCashFlowStatementListResponseReturnService $items,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            total: OzonDtoValue::float($payload['total'] ?? null),
            items: OzonDtoValue::object($payload['items'] ?? null, FinanceCashFlowStatementListResponseReturnService::class),
            extra: OzonDtoValue::extra($payload, ['total', 'items']),
        );
    }
}
