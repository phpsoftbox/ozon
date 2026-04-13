<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV1ActionsAutoAddProductsDeleteResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $productIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $productIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productIds: OzonDtoValue::array($payload['product_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['product_ids']),
        );
    }
}
