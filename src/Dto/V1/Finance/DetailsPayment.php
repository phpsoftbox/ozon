<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DetailsPayment implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $currencyCode,
        public ?float $payment,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            payment: OzonDtoValue::float($payload['payment'] ?? null),
            extra: OzonDtoValue::extra($payload, ['currency_code', 'payment']),
        );
    }
}
