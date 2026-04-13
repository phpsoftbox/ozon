<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Order;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class OrderCancelCheckResponsePostingGroup implements OzonDtoInterface
{
    /**
     * @param list<string> $postingNumbers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $postingNumbers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumbers: OzonDtoValue::array($payload['posting_numbers'] ?? null),
            extra: OzonDtoValue::extra($payload, ['posting_numbers']),
        );
    }
}
