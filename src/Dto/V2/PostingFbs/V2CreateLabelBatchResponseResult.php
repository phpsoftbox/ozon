<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2CreateLabelBatchResponseResult implements OzonDtoInterface
{
    /**
     * @param list<V2CreateLabelBatchResponseResultTasks> $tasks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $tasks,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            tasks: OzonDtoValue::objectList($payload['tasks'] ?? null, V2CreateLabelBatchResponseResultTasks::class),
            extra: OzonDtoValue::extra($payload, ['tasks']),
        );
    }
}
