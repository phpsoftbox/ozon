<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1PostingFbpListResponsePostingsFinancialDataProductsReturnCommission implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $amount,
        public ?float $payout,
        public ?float $percent,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::float($payload['amount'] ?? null),
            payout: OzonDtoValue::float($payload['payout'] ?? null),
            percent: OzonDtoValue::float($payload['percent'] ?? null),
            extra: OzonDtoValue::extra($payload, ['amount', 'payout', 'percent']),
        );
    }
}
