<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerCreateResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $containerIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $containerIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            containerIds: OzonDtoValue::array($payload['container_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['container_ids']),
        );
    }
}
