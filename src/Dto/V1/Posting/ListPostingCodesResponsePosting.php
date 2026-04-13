<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ListPostingCodesResponsePosting implements OzonDtoInterface
{
    /**
     * @param list<PostingAdditionalDataItem> $additionalData
     * @param list<PostingPostingProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $additionalData,
        public ?PostingPostingAnalyticsData $analyticsData,
        public ?int $cancelReasonId,
        public ?string $createdAt,
        public ?PostingPostingFinancialData $financialData,
        public ?string $inProcessAt,
        public ?PostingLegalInfo $legalInfo,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?string $postingNumber,
        public array $products,
        public ?string $status,
        public ?string $waitingDeadlineForDigitalCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            additionalData: OzonDtoValue::objectList($payload['additional_data'] ?? null, PostingAdditionalDataItem::class),
            analyticsData: OzonDtoValue::object($payload['analytics_data'] ?? null, PostingPostingAnalyticsData::class),
            cancelReasonId: OzonDtoValue::int($payload['cancel_reason_id'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            financialData: OzonDtoValue::object($payload['financial_data'] ?? null, PostingPostingFinancialData::class),
            inProcessAt: OzonDtoValue::string($payload['in_process_at'] ?? null),
            legalInfo: OzonDtoValue::object($payload['legal_info'] ?? null, PostingLegalInfo::class),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, PostingPostingProduct::class),
            status: OzonDtoValue::string($payload['status'] ?? null),
            waitingDeadlineForDigitalCode: OzonDtoValue::string($payload['waiting_deadline_for_digital_code'] ?? null),
            extra: OzonDtoValue::extra($payload, ['additional_data', 'analytics_data', 'cancel_reason_id', 'created_at', 'financial_data', 'in_process_at', 'legal_info', 'order_id', 'order_number', 'posting_number', 'products', 'status', 'waiting_deadline_for_digital_code']),
        );
    }
}
