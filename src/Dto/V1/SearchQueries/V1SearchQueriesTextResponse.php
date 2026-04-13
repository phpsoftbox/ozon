<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SearchQueries;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SearchQueriesTextResponse implements OzonDtoInterface
{
    /**
     * @param list<V1SearchQueriesTextResponseSearchQuery> $searchQueries
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $offset,
        public array $searchQueries,
        public ?string $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offset: OzonDtoValue::string($payload['offset'] ?? null),
            searchQueries: OzonDtoValue::objectList($payload['search_queries'] ?? null, V1SearchQueriesTextResponseSearchQuery::class),
            total: OzonDtoValue::string($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['offset', 'search_queries', 'total']),
        );
    }
}
