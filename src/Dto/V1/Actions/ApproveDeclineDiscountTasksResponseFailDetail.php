<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ApproveDeclineDiscountTasksResponseFailDetail implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $taskId,
        public ?string $errorForUser,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            taskId: OzonDtoValue::int($payload['task_id'] ?? null),
            errorForUser: OzonDtoValue::string($payload['error_for_user'] ?? null),
            extra: OzonDtoValue::extra($payload, ['task_id', 'error_for_user']),
        );
    }
}
