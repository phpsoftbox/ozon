<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetReturnsListResponse implements OzonDtoInterface
{
    /**
     * @param list<GetReturnsListResponseReturnsItem> $returns
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $returns,
        public ?bool $hasNext,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            returns: OzonDtoValue::objectList($payload['returns'] ?? null, GetReturnsListResponseReturnsItem::class),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            extra: OzonDtoValue::extra($payload, ['returns', 'has_next']),
        );
    }
}
