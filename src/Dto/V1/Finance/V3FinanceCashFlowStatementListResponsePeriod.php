<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FinanceCashFlowStatementListResponsePeriod implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $begin,
        public ?string $end,
        public ?int $id,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            begin: OzonDtoValue::string($payload['begin'] ?? null),
            end: OzonDtoValue::string($payload['end'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['begin', 'end', 'id']),
        );
    }
}
