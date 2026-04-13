<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFbsPickUpHistoryListResponseResult implements OzonDtoInterface
{
    /**
     * @param list<WarehouseFbsPickUpHistoryListResponseHistoryEntity> $history
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public array $history,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            history: OzonDtoValue::objectList($payload['history'] ?? null, WarehouseFbsPickUpHistoryListResponseHistoryEntity::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'history']),
        );
    }
}
