<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Order;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class OrderCancelCheckResponsePosting implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $cancellable,
        public ?string $postingNumber,
        public ?string $whyNotCancellable,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cancellable: OzonDtoValue::bool($payload['cancellable'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            whyNotCancellable: OzonDtoValue::string($payload['why_not_cancellable'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cancellable', 'posting_number', 'why_not_cancellable']),
        );
    }
}
