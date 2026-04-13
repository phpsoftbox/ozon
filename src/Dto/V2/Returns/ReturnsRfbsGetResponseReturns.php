<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnsRfbsGetResponseReturns implements OzonDtoInterface
{
    /**
     * @param list<ReturnsRfbsGetV2ResponseAvailableAction> $availableActions
     * @param list<string> $clientPhoto
     * @param list<ReturnsRfbsGetV2ResponseRejectionReason> $rejectionReason
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $availableActions,
        public ?string $clientName,
        public array $clientPhoto,
        public ?ReturnsRfbsGetV2ResponseClientReturnMethodType $clientReturnMethodType,
        public ?string $comment,
        public ?string $createdAt,
        public ?string $orderNumber,
        public ?string $postingNumber,
        public ?V2Product $product,
        public ?string $rejectionComment,
        public array $rejectionReason,
        public ?string $returnMethodDescription,
        public ?string $returnNumber,
        public ?ReturnsRfbsGetV2ResponseReturnReason $returnReason,
        public ?string $ruPostTrackingNumber,
        public ?V2ReturnsRfbsGetV2ResponseState $state,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availableActions: OzonDtoValue::objectList($payload['available_actions'] ?? null, ReturnsRfbsGetV2ResponseAvailableAction::class),
            clientName: OzonDtoValue::string($payload['client_name'] ?? null),
            clientPhoto: OzonDtoValue::array($payload['client_photo'] ?? null),
            clientReturnMethodType: OzonDtoValue::object($payload['client_return_method_type'] ?? null, ReturnsRfbsGetV2ResponseClientReturnMethodType::class),
            comment: OzonDtoValue::string($payload['comment'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            product: OzonDtoValue::object($payload['product'] ?? null, V2Product::class),
            rejectionComment: OzonDtoValue::string($payload['rejection_comment'] ?? null),
            rejectionReason: OzonDtoValue::objectList($payload['rejection_reason'] ?? null, ReturnsRfbsGetV2ResponseRejectionReason::class),
            returnMethodDescription: OzonDtoValue::string($payload['return_method_description'] ?? null),
            returnNumber: OzonDtoValue::string($payload['return_number'] ?? null),
            returnReason: OzonDtoValue::object($payload['return_reason'] ?? null, ReturnsRfbsGetV2ResponseReturnReason::class),
            ruPostTrackingNumber: OzonDtoValue::string($payload['ru_post_tracking_number'] ?? null),
            state: OzonDtoValue::object($payload['state'] ?? null, V2ReturnsRfbsGetV2ResponseState::class),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['available_actions', 'client_name', 'client_photo', 'client_return_method_type', 'comment', 'created_at', 'order_number', 'posting_number', 'product', 'rejection_comment', 'rejection_reason', 'return_method_description', 'return_number', 'return_reason', 'ru_post_tracking_number', 'state', 'warehouse_id']),
        );
    }
}
