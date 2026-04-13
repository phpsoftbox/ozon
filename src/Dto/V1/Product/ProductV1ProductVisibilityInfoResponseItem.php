<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1ProductVisibilityInfoResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ProductV1ProductVisibilityInfoResponseItemShowcasesVisibilityEnum $showcasesVisibility,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            showcasesVisibility: OzonDtoValue::scalarObject($payload['showcases_visibility'] ?? null, ProductV1ProductVisibilityInfoResponseItemShowcasesVisibilityEnum::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['showcases_visibility', 'sku']),
        );
    }
}
