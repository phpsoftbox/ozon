<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Products;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Productv2DeleteProductsResponse implements OzonDtoInterface
{
    /**
     * @param list<DeleteProductsResponseDeleteStatus> $status
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: OzonDtoValue::objectList($payload['status'] ?? null, DeleteProductsResponseDeleteStatus::class),
            extra: OzonDtoValue::extra($payload, ['status']),
        );
    }
}
