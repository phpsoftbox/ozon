<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerStatusGetResponse implements OzonDtoInterface
{
    /**
     * @param list<Carriagev1CarriageContainerStatusGetResponseContainers> $containers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $containers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            containers: OzonDtoValue::objectList($payload['containers'] ?? null, Carriagev1CarriageContainerStatusGetResponseContainers::class),
            extra: OzonDtoValue::extra($payload, ['containers']),
        );
    }
}
