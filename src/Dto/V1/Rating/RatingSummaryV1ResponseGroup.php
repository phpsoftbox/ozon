<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RatingSummaryV1ResponseGroup implements OzonDtoInterface
{
    /**
     * @param list<V1RatingItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $groupName,
        public array $items,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            groupName: OzonDtoValue::string($payload['group_name'] ?? null),
            items: OzonDtoValue::objectList($payload['items'] ?? null, V1RatingItem::class),
            extra: OzonDtoValue::extra($payload, ['group_name', 'items']),
        );
    }
}
