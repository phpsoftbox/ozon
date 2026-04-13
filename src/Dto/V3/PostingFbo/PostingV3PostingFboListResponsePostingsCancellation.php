<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV3PostingFboListResponsePostingsCancellation implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cancelReason,
        public ?string $cancellationInitiator,
        public ?string $cancellationType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cancelReason: OzonDtoValue::string($payload['cancel_reason'] ?? null),
            cancellationInitiator: OzonDtoValue::string($payload['cancellation_initiator'] ?? null),
            cancellationType: OzonDtoValue::string($payload['cancellation_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cancel_reason', 'cancellation_initiator', 'cancellation_type']),
        );
    }
}
