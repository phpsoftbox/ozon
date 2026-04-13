<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DraftGetWarehouseFboListResponse implements OzonDtoInterface
{
    /**
     * @param list<DraftGetWarehouseFboListResponseSearch> $search
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $search,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            search: OzonDtoValue::objectList($payload['search'] ?? null, DraftGetWarehouseFboListResponseSearch::class),
            extra: OzonDtoValue::extra($payload, ['search']),
        );
    }
}
