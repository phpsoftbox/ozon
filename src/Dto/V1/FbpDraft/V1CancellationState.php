<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CancellationState implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CancellationStateCancellationError $cancellationError,
        public ?V1CancellationStateStatus $cancellationStatus,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cancellationError: OzonDtoValue::object($payload['cancellation_error'] ?? null, CancellationStateCancellationError::class),
            cancellationStatus: OzonDtoValue::object($payload['cancellation_status'] ?? null, V1CancellationStateStatus::class),
            extra: OzonDtoValue::extra($payload, ['cancellation_error', 'cancellation_status']),
        );
    }
}
