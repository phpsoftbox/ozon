<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DescriptionCategory;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SearchAttributeValuesResponse implements OzonDtoInterface
{
    /**
     * @param list<SearchAttributeValuesResponseValue> $result
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
            result: OzonDtoValue::objectList($payload['result'] ?? null, SearchAttributeValuesResponseValue::class),
            extra: OzonDtoValue::extra($payload, ['result']),
        );
    }
}
