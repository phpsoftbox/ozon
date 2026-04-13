<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3Cancellation implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $affectCancellationRating,
        public ?string $cancelReason,
        public ?int $cancelReasonId,
        public ?string $cancellationInitiator,
        public ?string $cancellationType,
        public ?bool $cancelledAfterShip,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            affectCancellationRating: OzonDtoValue::bool($payload['affect_cancellation_rating'] ?? null),
            cancelReason: OzonDtoValue::string($payload['cancel_reason'] ?? null),
            cancelReasonId: OzonDtoValue::int($payload['cancel_reason_id'] ?? null),
            cancellationInitiator: OzonDtoValue::string($payload['cancellation_initiator'] ?? null),
            cancellationType: OzonDtoValue::string($payload['cancellation_type'] ?? null),
            cancelledAfterShip: OzonDtoValue::bool($payload['cancelled_after_ship'] ?? null),
            extra: OzonDtoValue::extra($payload, ['affect_cancellation_rating', 'cancel_reason', 'cancel_reason_id', 'cancellation_initiator', 'cancellation_type', 'cancelled_after_ship']),
        );
    }
}
