<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2CreateLabelBatchResponseResultTasks implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $taskId,
        public ?string $taskType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            taskId: OzonDtoValue::int($payload['task_id'] ?? null),
            taskType: OzonDtoValue::string($payload['task_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['task_id', 'task_type']),
        );
    }
}
