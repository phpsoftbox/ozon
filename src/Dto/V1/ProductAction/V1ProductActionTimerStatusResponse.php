<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductAction;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductActionTimerStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<V1ProductActionTimerStatusResponseStatuses> $statuses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $statuses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            statuses: OzonDtoValue::objectList($payload['statuses'] ?? null, V1ProductActionTimerStatusResponseStatuses::class),
            extra: OzonDtoValue::extra($payload, ['statuses']),
        );
    }
}
