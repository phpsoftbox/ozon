<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\ConditionalCancellation;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetConditionalCancellationListV2ResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $approveComment,
        public ?string $approveDate,
        public ?string $autoApproveDate,
        public ?int $cancellationId,
        public ?V2CancellationInitiatorEnum $cancellationInitiator,
        public ?GetConditionalCancellationListV2ResponseCancellationReason $cancellationReason,
        public ?string $cancellationReasonMessage,
        public ?string $cancelledAt,
        public ?string $orderDate,
        public ?string $postingNumber,
        public ?int $sourceId,
        public ?GetConditionalCancellationListV2ResponseState $state,
        public ?string $tplIntegrationType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            approveComment: OzonDtoValue::string($payload['approve_comment'] ?? null),
            approveDate: OzonDtoValue::string($payload['approve_date'] ?? null),
            autoApproveDate: OzonDtoValue::string($payload['auto_approve_date'] ?? null),
            cancellationId: OzonDtoValue::int($payload['cancellation_id'] ?? null),
            cancellationInitiator: OzonDtoValue::object($payload['cancellation_initiator'] ?? null, V2CancellationInitiatorEnum::class),
            cancellationReason: OzonDtoValue::object($payload['cancellation_reason'] ?? null, GetConditionalCancellationListV2ResponseCancellationReason::class),
            cancellationReasonMessage: OzonDtoValue::string($payload['cancellation_reason_message'] ?? null),
            cancelledAt: OzonDtoValue::string($payload['cancelled_at'] ?? null),
            orderDate: OzonDtoValue::string($payload['order_date'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            sourceId: OzonDtoValue::int($payload['source_id'] ?? null),
            state: OzonDtoValue::object($payload['state'] ?? null, GetConditionalCancellationListV2ResponseState::class),
            tplIntegrationType: OzonDtoValue::string($payload['tpl_integration_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['approve_comment', 'approve_date', 'auto_approve_date', 'cancellation_id', 'cancellation_initiator', 'cancellation_reason', 'cancellation_reason_message', 'cancelled_at', 'order_date', 'posting_number', 'source_id', 'state', 'tpl_integration_type']),
        );
    }
}
