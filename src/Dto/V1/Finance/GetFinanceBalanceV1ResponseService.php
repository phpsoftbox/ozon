<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetFinanceBalanceV1ResponseService implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1GetFinanceBalanceV1ResponseServicesMoney $amount,
        public ?string $name,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::object($payload['amount'] ?? null, V1GetFinanceBalanceV1ResponseServicesMoney::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['amount', 'name']),
        );
    }
}
