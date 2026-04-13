<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1GetFbpPostingResponsePosting implements OzonDtoInterface
{
    /**
     * @param list<PostingV1GetFbpPostingResponsePostingProducts> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PostingV1GetFbpPostingResponsePostingAnalyticsData $analyticsData,
        public ?PostingV1GetFbpPostingResponsePostingCancellation $cancellation,
        public ?PostingV1GetFbpPostingResponsePostingFinancialData $financialData,
        public ?string $inProcessAt,
        public ?string $orderDate,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?string $postingNumber,
        public array $products,
        public ?int $status,
        public ?string $substatus,
        public ?int $tplProviderId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            analyticsData: OzonDtoValue::object($payload['analytics_data'] ?? null, PostingV1GetFbpPostingResponsePostingAnalyticsData::class),
            cancellation: OzonDtoValue::object($payload['cancellation'] ?? null, PostingV1GetFbpPostingResponsePostingCancellation::class),
            financialData: OzonDtoValue::object($payload['financial_data'] ?? null, PostingV1GetFbpPostingResponsePostingFinancialData::class),
            inProcessAt: OzonDtoValue::string($payload['in_process_at'] ?? null),
            orderDate: OzonDtoValue::string($payload['order_date'] ?? null),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, PostingV1GetFbpPostingResponsePostingProducts::class),
            status: OzonDtoValue::int($payload['status'] ?? null),
            substatus: OzonDtoValue::string($payload['substatus'] ?? null),
            tplProviderId: OzonDtoValue::int($payload['tpl_provider_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['analytics_data', 'cancellation', 'financial_data', 'in_process_at', 'order_date', 'order_id', 'order_number', 'posting_number', 'products', 'status', 'substatus', 'tpl_provider_id']),
        );
    }
}
