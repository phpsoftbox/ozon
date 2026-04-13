<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class MoneyMoneyNextTariffCharge implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $amount,
        public ?string $currency,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::string($payload['amount'] ?? null),
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            extra: OzonDtoValue::extra($payload, ['amount', 'currency']),
        );
    }
}
