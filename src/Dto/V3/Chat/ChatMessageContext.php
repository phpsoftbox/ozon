<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Chat;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ChatMessageContext implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $orderNumber,
        public ?string $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            sku: OzonDtoValue::string($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['order_number', 'sku']),
        );
    }
}
