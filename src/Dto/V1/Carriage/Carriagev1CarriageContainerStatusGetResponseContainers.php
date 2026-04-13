<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerStatusGetResponseContainers implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $containerId,
        public ?string $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            containerId: OzonDtoValue::int($payload['container_id'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['container_id', 'status']),
        );
    }
}
