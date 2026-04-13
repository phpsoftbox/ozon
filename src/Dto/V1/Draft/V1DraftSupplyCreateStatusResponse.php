<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DraftSupplyCreateStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $errorMessages
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorMessages,
        public ?DraftSupplyCreateStatusResponseResult $result,
        public ?V1DraftSupplyCreateStatus $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorMessages: OzonDtoValue::array($payload['error_messages'] ?? null),
            result: OzonDtoValue::object($payload['result'] ?? null, DraftSupplyCreateStatusResponseResult::class),
            status: OzonDtoValue::object($payload['status'] ?? null, V1DraftSupplyCreateStatus::class),
            extra: OzonDtoValue::extra($payload, ['error_messages', 'result', 'status']),
        );
    }
}
