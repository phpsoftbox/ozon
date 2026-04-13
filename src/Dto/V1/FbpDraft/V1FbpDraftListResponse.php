<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1FbpDraftListResponseItem> $items
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
            items: OzonDtoValue::objectList($payload['items'] ?? null, V1FbpDraftListResponseItem::class),
            lastId: OzonDtoValue::int($payload['last_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['has_next', 'items', 'last_id']),
        );
    }
}
