<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DetailsReturnDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $total,
        public ?float $amount,
        public ?DetailsReturns $returnServices,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            total: OzonDtoValue::float($payload['total'] ?? null),
            amount: OzonDtoValue::float($payload['amount'] ?? null),
            returnServices: OzonDtoValue::object($payload['return_services'] ?? null, DetailsReturns::class),
            extra: OzonDtoValue::extra($payload, ['total', 'amount', 'return_services']),
        );
    }
}
