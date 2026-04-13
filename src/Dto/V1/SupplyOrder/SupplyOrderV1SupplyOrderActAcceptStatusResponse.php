<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActAcceptStatusResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyOrderV1SupplyOrderActAcceptStatusResponseStatusEnum $status,
        public ?string $errorMessage,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, SupplyOrderV1SupplyOrderActAcceptStatusResponseStatusEnum::class),
            errorMessage: OzonDtoValue::string($payload['error_message'] ?? null),
            extra: OzonDtoValue::extra($payload, ['status', 'error_message']),
        );
    }
}
