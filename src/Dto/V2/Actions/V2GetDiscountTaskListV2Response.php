<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2GetDiscountTaskListV2Response implements OzonDtoInterface
{
    /**
     * @param list<GetDiscountTaskListV2ResponseTask> $tasks
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
            tasks: OzonDtoValue::objectList($payload['tasks'] ?? null, GetDiscountTaskListV2ResponseTask::class),
            extra: OzonDtoValue::extra($payload, ['tasks']),
        );
    }
}
