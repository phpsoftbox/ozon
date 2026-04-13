<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2DraftTimeslotInfoResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V2DraftTimeslotInfoResponseErrorReasonEnum $errorReason,
        public ?DraftTimeslotInfoResponseResult $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReason: OzonDtoValue::object($payload['error_reason'] ?? null, V2DraftTimeslotInfoResponseErrorReasonEnum::class),
            result: OzonDtoValue::object($payload['result'] ?? null, DraftTimeslotInfoResponseResult::class),
            extra: OzonDtoValue::extra($payload, ['error_reason', 'result']),
        );
    }
}
