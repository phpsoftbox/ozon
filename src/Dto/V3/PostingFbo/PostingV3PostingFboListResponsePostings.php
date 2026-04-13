<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV3PostingFboListResponsePostings implements OzonDtoInterface
{
    /**
     * @param list<PostingV3PostingFboListResponsePostingsAdditionalData> $additionalData
     * @param list<PostingV3PostingFboListResponsePostingsProducts> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $additionalData,
        public ?PostingV3PostingFboListResponsePostingsAnalyticsData $analyticsData,
        public ?int $cancelReasonId,
        public ?PostingV3PostingFboListResponsePostingsCancellation $cancellation,
        public ?string $createdAt,
        public ?PostingV3PostingFboListResponsePostingsExternalOrder $externalOrder,
        public ?PostingV3PostingFboListResponsePostingsFinancialData $financialData,
        public ?string $inProcessAt,
        public ?PostingV3PostingFboListResponsePostingsLegalInfo $legalInfo,
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
            additionalData: OzonDtoValue::objectList($payload['additional_data'] ?? null, PostingV3PostingFboListResponsePostingsAdditionalData::class),
            analyticsData: OzonDtoValue::object($payload['analytics_data'] ?? null, PostingV3PostingFboListResponsePostingsAnalyticsData::class),
            cancelReasonId: OzonDtoValue::int($payload['cancel_reason_id'] ?? null),
            cancellation: OzonDtoValue::object($payload['cancellation'] ?? null, PostingV3PostingFboListResponsePostingsCancellation::class),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            externalOrder: OzonDtoValue::object($payload['external_order'] ?? null, PostingV3PostingFboListResponsePostingsExternalOrder::class),
            financialData: OzonDtoValue::object($payload['financial_data'] ?? null, PostingV3PostingFboListResponsePostingsFinancialData::class),
            inProcessAt: OzonDtoValue::string($payload['in_process_at'] ?? null),
            legalInfo: OzonDtoValue::object($payload['legal_info'] ?? null, PostingV3PostingFboListResponsePostingsLegalInfo::class),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, PostingV3PostingFboListResponsePostingsProducts::class),
            status: OzonDtoValue::string($payload['status'] ?? null),
            substatus: OzonDtoValue::string($payload['substatus'] ?? null),
            extra: OzonDtoValue::extra($payload, ['additional_data', 'analytics_data', 'cancel_reason_id', 'cancellation', 'created_at', 'external_order', 'financial_data', 'in_process_at', 'legal_info', 'order_id', 'order_number', 'posting_number', 'products', 'status', 'substatus']),
        );
    }
}
