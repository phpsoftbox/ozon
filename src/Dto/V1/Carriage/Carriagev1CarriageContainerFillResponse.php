<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerFillResponse implements OzonDtoInterface
{
    /**
     * @param list<Carriagev1CarriageContainerFillResponseErrorPostings> $errorPostings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorPostings,
        public ?int $taskId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorPostings: OzonDtoValue::objectList($payload['error_postings'] ?? null, Carriagev1CarriageContainerFillResponseErrorPostings::class),
            taskId: OzonDtoValue::int($payload['task_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error_postings', 'task_id']),
        );
    }
}
