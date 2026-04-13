<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Products;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Productv2ProductsStocksResponse implements OzonDtoInterface
{
    /**
     * @param list<Productv2ProductsStocksResponseResult> $result
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
            result: OzonDtoValue::objectList($payload['result'] ?? null, Productv2ProductsStocksResponseResult::class),
            extra: OzonDtoValue::extra($payload, ['result']),
        );
    }
}
