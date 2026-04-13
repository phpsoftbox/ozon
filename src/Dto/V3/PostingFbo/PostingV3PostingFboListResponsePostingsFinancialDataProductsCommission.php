<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV3PostingFboListResponsePostingsFinancialDataProductsCommission implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $amount,
        public ?string $currency,
        public ?int $percent,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::float($payload['amount'] ?? null),
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            percent: OzonDtoValue::int($payload['percent'] ?? null),
            extra: OzonDtoValue::extra($payload, ['amount', 'currency', 'percent']),
        );
    }
}
