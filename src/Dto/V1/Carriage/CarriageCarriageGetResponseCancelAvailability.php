<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CarriageCarriageGetResponseCancelAvailability implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isCancelAvailable,
        public ?string $reason,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isCancelAvailable: OzonDtoValue::bool($payload['is_cancel_available'] ?? null),
            reason: OzonDtoValue::string($payload['reason'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_cancel_available', 'reason']),
        );
    }
}
