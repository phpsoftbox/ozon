<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Order;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1OrderCreateResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $orderNumber,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postings: OzonDtoValue::array($payload['postings'] ?? null),
            extra: OzonDtoValue::extra($payload, ['order_number', 'postings']),
        );
    }
}
