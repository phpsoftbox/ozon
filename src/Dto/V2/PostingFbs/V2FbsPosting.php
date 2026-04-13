<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2FbsPosting implements OzonDtoInterface
{
    /**
     * @param list<V2FbsPostingProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?FbsPostingBarcodes $barcodes,
        public ?int $cancelReasonId,
        public ?string $createdAt,
        public ?string $inProcessAt,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?string $postingNumber,
        public array $products,
        public ?string $shipmentDate,
        public ?string $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            barcodes: OzonDtoValue::object($payload['barcodes'] ?? null, FbsPostingBarcodes::class),
            cancelReasonId: OzonDtoValue::int($payload['cancel_reason_id'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            inProcessAt: OzonDtoValue::string($payload['in_process_at'] ?? null),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, V2FbsPostingProduct::class),
            shipmentDate: OzonDtoValue::string($payload['shipment_date'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['barcodes', 'cancel_reason_id', 'created_at', 'in_process_at', 'order_id', 'order_number', 'posting_number', 'products', 'shipment_date', 'status']),
        );
    }
}
