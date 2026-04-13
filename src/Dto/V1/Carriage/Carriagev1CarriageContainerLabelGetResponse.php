<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerLabelGetResponse implements OzonDtoInterface
{
    /**
     * @param list<Carriagev1CarriageContainerLabelGetResponseErrorContainers> $errorContainers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?Carriagev1CarriageContainerLabelGetResponseContent $content,
        public array $errorContainers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            content: OzonDtoValue::object($payload['content'] ?? null, Carriagev1CarriageContainerLabelGetResponseContent::class),
            errorContainers: OzonDtoValue::objectList($payload['error_containers'] ?? null, Carriagev1CarriageContainerLabelGetResponseErrorContainers::class),
            extra: OzonDtoValue::extra($payload, ['content', 'error_containers']),
        );
    }
}
