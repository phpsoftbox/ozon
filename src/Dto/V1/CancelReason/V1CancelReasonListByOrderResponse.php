<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\CancelReason;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CancelReasonListByOrderResponse implements OzonDtoInterface
{
    /**
     * @param list<V1CancelReasonListByOrderResponseReason> $reasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $reasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            reasons: OzonDtoValue::objectList($payload['reasons'] ?? null, V1CancelReasonListByOrderResponseReason::class),
            extra: OzonDtoValue::extra($payload, ['reasons']),
        );
    }
}
