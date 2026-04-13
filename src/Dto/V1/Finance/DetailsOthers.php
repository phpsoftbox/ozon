<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DetailsOthers implements OzonDtoInterface
{
    /**
     * @param list<FinanceCashFlowStatementListResponseDetailsOthers> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $total,
        public array $items,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            total: OzonDtoValue::float($payload['total'] ?? null),
            items: OzonDtoValue::objectList($payload['items'] ?? null, FinanceCashFlowStatementListResponseDetailsOthers::class),
            extra: OzonDtoValue::extra($payload, ['total', 'items']),
        );
    }
}
