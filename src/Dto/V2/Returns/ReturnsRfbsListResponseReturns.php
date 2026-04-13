<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnsRfbsListResponseReturns implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $clientName,
        public ?string $createdAt,
        public ?string $orderNumber,
        public ?string $postingNumber,
        public ?V2Product $product,
        public ?int $returnId,
        public ?string $returnNumber,
        public ?V2ReturnsRfbsListV2ResponseState $state,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clientName: OzonDtoValue::string($payload['client_name'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            product: OzonDtoValue::object($payload['product'] ?? null, V2Product::class),
            returnId: OzonDtoValue::int($payload['return_id'] ?? null),
            returnNumber: OzonDtoValue::string($payload['return_number'] ?? null),
            state: OzonDtoValue::object($payload['state'] ?? null, V2ReturnsRfbsListV2ResponseState::class),
            extra: OzonDtoValue::extra($payload, ['client_name', 'created_at', 'order_number', 'posting_number', 'product', 'return_id', 'return_number', 'state']),
        );
    }
}
