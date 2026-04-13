<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Receipts;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ReceiptsSellerListResponse implements OzonDtoInterface
{
    /**
     * @param list<ReceiptsSellerListResponseReceipt> $receipts
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public array $receipts,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            receipts: OzonDtoValue::objectList($payload['receipts'] ?? null, ReceiptsSellerListResponseReceipt::class),
            extra: OzonDtoValue::extra($payload, ['has_next', 'receipts']),
        );
    }
}
