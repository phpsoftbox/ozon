<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ApproveDeclineDiscountTasksResponseResult implements OzonDtoInterface
{
    /**
     * @param list<ApproveDeclineDiscountTasksResponseFailDetail> $failDetails
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $failDetails,
        public ?int $successCount,
        public ?int $failCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            failDetails: OzonDtoValue::objectList($payload['fail_details'] ?? null, ApproveDeclineDiscountTasksResponseFailDetail::class),
            successCount: OzonDtoValue::int($payload['success_count'] ?? null),
            failCount: OzonDtoValue::int($payload['fail_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['fail_details', 'success_count', 'fail_count']),
        );
    }
}
