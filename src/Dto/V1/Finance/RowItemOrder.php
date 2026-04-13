<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RowItemOrder implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $postingNumber,
        public ?string $createdDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            createdDate: OzonDtoValue::string($payload['created_date'] ?? null),
            extra: OzonDtoValue::extra($payload, ['posting_number', 'created_date']),
        );
    }
}
