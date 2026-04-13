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
     * @param array<array-key, mixed> $statuses
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
            statuses: OzonDtoValue::array($payload['statuses'] ?? null),
            extra: OzonDtoValue::extra($payload, ['statuses']),
        );
    }
}
