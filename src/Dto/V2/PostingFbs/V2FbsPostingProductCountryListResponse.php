<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2FbsPostingProductCountryListResponse implements OzonDtoInterface
{
    /**
     * @param list<V2FbsPostingProductCountryListResponseResult> $result
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::objectList($payload['result'] ?? null, V2FbsPostingProductCountryListResponseResult::class),
            extra: OzonDtoValue::extra($payload, ['result']),
        );
    }
}
