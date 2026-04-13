<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SetProductStairwayDiscountByQuantityResponseError implements OzonDtoInterface
{
    /**
     * @param list<ErrorData> $data
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $data,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            data: OzonDtoValue::objectList($payload['data'] ?? null, ErrorData::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['data', 'sku']),
        );
    }
}
