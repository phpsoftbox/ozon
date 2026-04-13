<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV3PostingFbsPackageLabelCreateResponse implements OzonDtoInterface
{
    /**
     * @param list<PostingV3PostingFbsPackageLabelCreateResponseTasks> $tasks
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
            tasks: OzonDtoValue::objectList($payload['tasks'] ?? null, PostingV3PostingFbsPackageLabelCreateResponseTasks::class),
            extra: OzonDtoValue::extra($payload, ['tasks']),
        );
    }
}
