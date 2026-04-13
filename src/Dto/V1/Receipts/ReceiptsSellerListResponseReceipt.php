<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Receipts;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReceiptsSellerListResponseReceipt implements OzonDtoInterface
{
    /**
     * @param list<string> $postingNumbers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $createdAt,
        public ?ReceiptsSellerListResponseReceiptOperationTypeEnum $operationType,
        public ?int $orderId,
        public ?string $parentReceiptId,
        public array $postingNumbers,
        public ?string $receiptId,
        public ?string $receiptNumber,
        public ?ReceiptsSellerListResponseReceiptTypeEnum $type,
        public ?string $updatedAt,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            operationType: OzonDtoValue::object($payload['operation_type'] ?? null, ReceiptsSellerListResponseReceiptOperationTypeEnum::class),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            parentReceiptId: OzonDtoValue::string($payload['parent_receipt_id'] ?? null),
            postingNumbers: OzonDtoValue::array($payload['posting_numbers'] ?? null),
            receiptId: OzonDtoValue::string($payload['receipt_id'] ?? null),
            receiptNumber: OzonDtoValue::string($payload['receipt_number'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, ReceiptsSellerListResponseReceiptTypeEnum::class),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            extra: OzonDtoValue::extra($payload, ['created_at', 'operation_type', 'order_id', 'parent_receipt_id', 'posting_numbers', 'receipt_id', 'receipt_number', 'type', 'updated_at']),
        );
    }
}
