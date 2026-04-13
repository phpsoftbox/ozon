<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RowItemLegalEntityDocument implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $number,
        public ?string $saleDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            number: OzonDtoValue::string($payload['number'] ?? null),
            saleDate: OzonDtoValue::string($payload['sale_date'] ?? null),
            extra: OzonDtoValue::extra($payload, ['number', 'sale_date']),
        );
    }
}
