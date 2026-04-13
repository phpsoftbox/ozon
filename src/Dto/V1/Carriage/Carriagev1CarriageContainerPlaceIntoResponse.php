<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerPlaceIntoResponse implements OzonDtoInterface
{
    /**
     * @param list<Carriagev1CarriageContainerPlaceIntoResponseErrorContainers> $errorContainers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorContainers,
        public ?int $taskId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorContainers: OzonDtoValue::objectList($payload['error_containers'] ?? null, Carriagev1CarriageContainerPlaceIntoResponseErrorContainers::class),
            taskId: OzonDtoValue::int($payload['task_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error_containers', 'task_id']),
        );
    }
}
