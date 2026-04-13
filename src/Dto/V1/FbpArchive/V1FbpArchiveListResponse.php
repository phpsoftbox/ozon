<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpArchiveListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1FbpArchiveListResponseItem> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public array $items,
        public ?int $lastId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            items: OzonDtoValue::objectList($payload['items'] ?? null, V1FbpArchiveListResponseItem::class),
            lastId: OzonDtoValue::int($payload['last_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['has_next', 'items', 'last_id']),
        );
    }
}
