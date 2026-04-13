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
     * @param array<array-key, mixed> $items
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
            items: OzonDtoValue::array($payload['items'] ?? null),
            extra: OzonDtoValue::extra($payload, ['group_name', 'items']),
        );
    }
}
