<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV1GetFbpPostingResponsePostingCancellation implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cancelReason,
        public ?int $cancelReasonId,
        public ?string $cancellationInitiator,
        public ?string $cancellationType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cancelReason: OzonDtoValue::string($payload['cancel_reason'] ?? null),
            cancelReasonId: OzonDtoValue::int($payload['cancel_reason_id'] ?? null),
            cancellationInitiator: OzonDtoValue::string($payload['cancellation_initiator'] ?? null),
            cancellationType: OzonDtoValue::string($payload['cancellation_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cancel_reason', 'cancel_reason_id', 'cancellation_initiator', 'cancellation_type']),
        );
    }
}
