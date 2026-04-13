<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV2PostingDigitalListResponsePostingsCancellation implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cancellationInitiator,
        public ?string $cancellationType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cancellationInitiator: OzonDtoValue::string($payload['cancellation_initiator'] ?? null),
            cancellationType: OzonDtoValue::string($payload['cancellation_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cancellation_initiator', 'cancellation_type']),
        );
    }
}
