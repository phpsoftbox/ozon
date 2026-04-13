<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Financev3FinanceTransactionListV3ResponseResult implements OzonDtoInterface
{
    /**
     * @param list<FinanceTransactionListV3ResponseOperation> $operations
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $operations,
        public ?int $pageCount,
        public ?int $rowCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            operations: OzonDtoValue::objectList($payload['operations'] ?? null, FinanceTransactionListV3ResponseOperation::class),
            pageCount: OzonDtoValue::int($payload['page_count'] ?? null),
            rowCount: OzonDtoValue::int($payload['row_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['operations', 'page_count', 'row_count']),
        );
    }
}
