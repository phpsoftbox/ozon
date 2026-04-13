<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerLabelGetResponseErrorContainers implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $containerId,
        public ?string $errorMessage,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            containerId: OzonDtoValue::int($payload['container_id'] ?? null),
            errorMessage: OzonDtoValue::string($payload['error_message'] ?? null),
            extra: OzonDtoValue::extra($payload, ['container_id', 'error_message']),
        );
    }
}
