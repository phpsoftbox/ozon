<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2FboPosting implements OzonDtoInterface
{
    /**
     * @param list<V2AdditionalDataItem> $additionalData
     * @param list<V2PostingProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $additionalData,
        public ?FboPostingFboPostingAnalyticsData $analyticsData,
        public ?int $cancelReasonId,
        public ?string $createdAt,
        public ?string $factDeliveryDate,
        public ?V2PostingFinancialDataFBO $financialData,
        public ?string $inProcessAt,
        public ?V2FboSinglePostingLegalInfo $legalInfo,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?string $postingNumber,
        public array $products,
        public ?string $status,
        public ?string $substatus,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            additionalData: OzonDtoValue::objectList($payload['additional_data'] ?? null, V2AdditionalDataItem::class),
            analyticsData: OzonDtoValue::object($payload['analytics_data'] ?? null, FboPostingFboPostingAnalyticsData::class),
            cancelReasonId: OzonDtoValue::int($payload['cancel_reason_id'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            factDeliveryDate: OzonDtoValue::string($payload['fact_delivery_date'] ?? null),
            financialData: OzonDtoValue::object($payload['financial_data'] ?? null, V2PostingFinancialDataFBO::class),
            inProcessAt: OzonDtoValue::string($payload['in_process_at'] ?? null),
            legalInfo: OzonDtoValue::object($payload['legal_info'] ?? null, V2FboSinglePostingLegalInfo::class),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, V2PostingProduct::class),
            status: OzonDtoValue::string($payload['status'] ?? null),
            substatus: OzonDtoValue::string($payload['substatus'] ?? null),
            extra: OzonDtoValue::extra($payload, ['additional_data', 'analytics_data', 'cancel_reason_id', 'created_at', 'fact_delivery_date', 'financial_data', 'in_process_at', 'legal_info', 'order_id', 'order_number', 'posting_number', 'products', 'status', 'substatus']),
        );
    }
}
