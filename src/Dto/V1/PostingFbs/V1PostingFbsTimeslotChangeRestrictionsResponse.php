<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingFbsTimeslotChangeRestrictionsResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1PostingFbsTimeslotChangeRestrictionsDeliveryInterval $deliveryInterval,
        public ?int $remainingChangesCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliveryInterval: OzonDtoValue::object($payload['delivery_interval'] ?? null, V1PostingFbsTimeslotChangeRestrictionsDeliveryInterval::class),
            remainingChangesCount: OzonDtoValue::int($payload['remaining_changes_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_interval', 'remaining_changes_count']),
        );
    }
}
