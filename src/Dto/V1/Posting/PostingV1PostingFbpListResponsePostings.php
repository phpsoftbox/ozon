<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1PostingFbpListResponsePostings implements OzonDtoInterface
{
    /**
     * @param list<PostingV1PostingFbpListResponsePostingsProducts> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PostingV1PostingFbpListResponsePostingsFinancialData $financialData,
        public ?string $inProcessAt,
        public ?string $orderDate,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?string $postingNumber,
        public array $products,
        public ?int $providerId,
        public ?string $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            financialData: OzonDtoValue::object($payload['financial_data'] ?? null, PostingV1PostingFbpListResponsePostingsFinancialData::class),
            inProcessAt: OzonDtoValue::string($payload['in_process_at'] ?? null),
            orderDate: OzonDtoValue::string($payload['order_date'] ?? null),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, PostingV1PostingFbpListResponsePostingsProducts::class),
            providerId: OzonDtoValue::int($payload['provider_id'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['financial_data', 'in_process_at', 'order_date', 'order_id', 'order_number', 'posting_number', 'products', 'provider_id', 'status']),
        );
    }
}
