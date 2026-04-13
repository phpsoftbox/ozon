<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingCancelStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $postingNumber
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $orderNumber,
        public array $postingNumber,
        public ?string $state,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingNumber: OzonDtoValue::array($payload['posting_number'] ?? null),
            state: OzonDtoValue::string($payload['state'] ?? null),
            extra: OzonDtoValue::extra($payload, ['order_number', 'posting_number', 'state']),
        );
    }
}
